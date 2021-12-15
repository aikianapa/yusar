window.requestAnimFrame = (function() {
    return (
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        }
    )
})();


let lf2_flag = true

let lf2_f = 0

window.addEventListener('scroll', function() {
    var top = $('.lf-menu02').offset().top - $(window).scrollTop();
    var delta = lf2_f - pageYOffset
    var h = document.documentElement.clientHeight

    if (delta < 0 && top < h && top > 0 && lf2_flag) {
        lf2_flag = false

        requestAnimFrame(move)

        function move() {
            window.scrollBy(0, +30)
            var top = $('.lf-menu02').offset().top - $(window).scrollTop();

            if (top > 30) {
                requestAnimFrame(move)
            } else {
                lf2_flag = true
                window.scrollBy(0, top)
            }
        }
    }
    lf2_f = pageYOffset
})


window.addEventListener('load', function() {


    //выезжающий заголовок сайта
    function lf_show_header() {
        var siteTitleRows = document.querySelectorAll('.lf-site-title-row-inner');

        [].forEach.call(siteTitleRows, function(row) {
            var pad = parseInt(window.getComputedStyle(row, null).getPropertyValue('margin-top'))
            var x = pad / 6

            function move() {
                row.style.marginTop = Math.max(pad = pad - (pad > x ? 5 : 1)) + 'px'
                if (pad > 0) {
                    requestAnimFrame(move)
                }
            }

            move()

            setTimeout(lf_show_header2, 600)
        })
    }

    //ждём когда прелоадер изчезнет и показываем заголовок
    var timer = setInterval(function() {
        var preloader = document.querySelector('.preloader')

        if (!preloader) {
            clearTimeout(timer)
            setTimeout(lf_show_header, 400)
        }
    }, 100)


    //появляющийся подзаголовок сайта
    function lf_show_header2() {
        var siteSubtitle = document.querySelector('.lf-site-subtitle')
        var button = document.querySelector('.lf-header-btn')
        var siteSubtitleRGB = '33,37,41'
        var buttonRGB = '47,128,237'
        var siteSubtitleCount = 0

        function siteSubtitleShow() {
            siteSubtitle.style.color = 'rgb(' + siteSubtitleRGB + ',' + (siteSubtitleCount += 0.01) + ')'
            button.style.background = 'rgb(' + buttonRGB + ',' + (siteSubtitleCount += 0.01) + ')'
            button.dataset.transparent = "false"
            if (siteSubtitleCount < 1) {
                requestAnimFrame(siteSubtitleShow)
            }
        }

        siteSubtitleShow()
    }

})

var lf_statistics = (function() {
    var $page1 = document.querySelector('.lf-stats1')
    var $page2 = document.querySelector('.lf-stats2')

    function Block(block) {
        var outer = block.querySelector('.lf-stats-value-outer')
        var inner = block.querySelector('.lf-stats-value-inner')
        var text = block.querySelector('.lf-stats-text')

        //плавно двигать блок. pos - положение центра блока от верхнего края страницы, в процентах
        function move_block(pos) {
            var percent = document.documentElement.clientHeight / 100
            block.style.marginTop = pos * percent - block.offsetHeight / 2 + 'px'
        }

        //проявить текст. val=0 - текст скрыт, val=100 - проявлен
        function show_text(val) {
            text.style.opacity = val / 100
        }

        function hideText(val) {
            text.style.opacity = val * 100
        }

        //показать значение. val=0 - текст скрыт, val=100 - проявлен
        function show_value(val) {
            var size = outer.offsetHeight
            inner.style.marginTop = size / 100 * (100 - val) + 'px'
        }

        function hideValue(val) {
            var size = outer.offsetHeight
            inner.style.marginTop = size / 100 * (100 + val) + 'px'
        }

        var val = 0

        return {
            setValue(_val) {
                val = _val
                var pos = 75 - val * 0.25
                var val2 = Math.max(val - 60, 0) * 2.5
                move_block(pos)
                show_value(val)
                show_text(val2)
            },
            getValue() { return val }
        }
    }

    function Page(el) {
        var $blocks = el.querySelectorAll('.lf-stats-item')
        var blocks = [];

        [].forEach.call($blocks, function($block) {
            var block = Block($block)
            blocks.push(block)
        })

        //плавно скрыть страницу. val=0 - страница видна, val=100 - скрыта		
        function hide(val) {
            el.style.top = -val / 4 + '%'
            el.style.opacity = Math.max(1 - val / 100, 0)
        }

        var val = 0

        function draw(index, value) {
            if (window.innerWidth > 450) {
                for (var i = 0; i < index; i++) {
                    blocks[i].setValue(100)
                }
            }
            if (window.innerWidth < 450 && index) {
                blocks[index - 1].setValue(Math.max(1 - Math.min(value * 2, 100) / 100, 0))
            }
            if (index < 5) {
                hide(0)
                blocks[index].setValue(value)

                for (var i = index + 1; i < 5; i++) {
                    blocks[i].setValue(0)
                }
            } else {
                hide(Math.min(value * 2, 100))
            }
        }

        var o = {
            setValue(_val) {
                val = _val

                if (val == 100 || val == 0) {
                    el.style.display = 'none'
                } else {
                    el.style.display = 'flex'
                }


                _val = _val * 6
                var index = Math.min(5, Math.floor(_val / 100))
                _val = _val === 600 ? 100 : _val % 100
                if (_val === 99) _val = 100
                draw(index, _val)
            },
            getValue() { return val }
        }

        o.setValue(0)

        return o
    }

    return {
        page1: Page($page1),
        page2: Page($page2)
    }
})()


var brain = (function() {
    var el = document.querySelector('.lf-brain')
    var el2 = document.querySelector('.lf-brain2')
    var pos = 0
    var size = 0
    var sat = 0
    var opacity = 0
    var opacity2 = 0

    return {
        setSize: function(w) {
            size = w
            el2.style.backgroundSize = el.style.backgroundSize = w + 'px'
        },

        getSize: function() { return size },

        setPos: function(_pos) {
            pos = _pos
            el2.style.backgroundPosition = el.style.backgroundPosition = 'center ' + pos + 'px'
        },

        getPos: function() { return pos },

        setSaturate(s) {
            sat = s
            var val = 'saturate(' + s + '%)'
            el2.style.filter = el.style.filter = val
        },


        getSaturate() { return sat },

        setOpacity(op) {
            opacity = op
            el.style.opacity = op / 100
        },
        setOpacity2(op) {
            opacity2 = op
            el2.style.opacity = op / 100
        },

        getOpacity() {
            return opacity
        },
        getOpacity2() {
            return opacity2
        }
    }
})()

function getbrainsize() {
    var w = window.innerWidth

    if (w > 1000) {
        return 700
    } else if (w > 800) {
        return 450
    } else {
        return w * 0.7
    }

}

var lf_resize_flag = true

window.addEventListener('resize', function() {
    if (lf_resize_flag) {
        lf_resize_flag = false
    } else {
        var x = brain.getSize() / brain.start_size
        brain.start_size = getbrainsize()
        brain.setSize(x * brain.start_size)
    }
})



brain.start_pos = document.querySelector('.lf-header-btn').getBoundingClientRect().top

brain.start_size = getbrainsize()
brain.start_sat = 0
    //
brain.appendix = 50
brain.prestart_size = brain.start_size + brain.appendix

brain.setSize(brain.prestart_size)
brain.setPos(brain.start_pos)
brain.setSaturate(brain.start_sat)

function scale() {
    var newsize = Math.max(brain.getSize() - 5, brain.start_size)
    brain.setSize(newsize)
    if (newsize > brain.start_size) {
        requestAnimFrame(scale)
    }
}

function show() {
    var opacity = brain.getOpacity() + 1
    brain.setOpacity(opacity)
    if (opacity < 100) {
        requestAnimFrame(show)
    }
}

setTimeout(function() {
    scale();
    show();
}, 1000)

var sections = [
    //задержка
    {
        "height": 50,
        "handler": function() {}
    },
    //картинка органа появляется снизу
    {
        "height": 600,
        "handler": function(position) {
            var a = brain.start_pos
            var b = (document.documentElement.clientHeight - brain.getSize()) / 2
            var delta = b - a
            var percent = delta / 100
            brain.setPos(a + position * percent)
        }
    },

    //картинка органа вспыхивает
    {
        "height": 100,
        "handler": function(position) {
            brain.setSaturate(Math.min(50, position / 2))
            brain.setOpacity2(Math.min(50, position / 2))
        }
    },

    //картинка затемняется и уменьшается
    {
        "height": 100,
        "handler": function(position) {
            var oldsize = brain.getSize()

            brain.setSaturate(100 - position)
            brain.setOpacity(0)
            brain.setOpacity2(70 - position / 2)

            var newsize = brain.start_size - position + (window.innerWidth > 450 ? 50 : 0)
            var delta = oldsize - newsize

            brain.setSize(newsize)
            brain.setPos(brain.getPos() + delta / 2)
        }
    },
    //статистика
    {
        "height": 1500,
        "handler": function(position) {
            lf_statistics.page1.setValue(position)
        }
    },
    {
        "height": 1500,
        "handler": function(position) {
            lf_statistics.page2.setValue(position)
        }
    },
    //изчезновение картинки
    {
        "height": 200,
        "handler": function(position) {
            brain.setOpacity2(50 - position / 2)
            brain.setOpacity(0)
        }
    }
]

var placeholder = document.querySelector('#qbody')
var title = document.querySelector('title')

var sum = 0

for (var i in sections) {
    var section = sections[i]
    section.start = sum
    sum += section.height
    section.end = sum
    section.index = i
}

placeholder.style.height = sum + 'px'

var old_index

window.addEventListener('scroll', function() {
    var last_section = sections[sections.length - 1]
    var section = sections.find(function(section) {
        if (section.start <= pageYOffset && section.end >= pageYOffset) {
            return true
        }
    }) || last_section

    var index = section.index

    if (index > old_index) {
        for (var i = old_index; i < index; i++) {
            sections[i].handler(100)
        }
    } else if (index < old_index) {
        for (var i = old_index; i > index; i--) {
            sections[i].handler(0)
        }
    }

    var pos = (pageYOffset - section.start) / (section.height / 100)
    section.handler(Math.min(100, pos))

    //console.log({i:section.index, pos:Math.floor(pos)})

    old_index = index
})