$('.mod-yusarsearch').each(function() {
    if (this.done == undefined) {
        this.done = true
        let elid = '#' + $(this).attr('id')
        let form = new Ractive({
            el: elid,
            template: $(elid).html(),
            data: { list: [], find: '' },
            on: {
                search(ev) {
                    let string = $(form.el).find('input').val()
                    form.set('find', string)
                    $.post('/module/yusarsearch', { find: string }, function(list) {
                        form.set('list', list)
                    })
                    return false
                },
                goto(ev) {
                    let href = $(ev.node).data('url')
                    document.location.href = href
                }
            }
        })
    }
})