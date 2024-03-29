var lf_len = lf_statistics.page2 ? (lf_statistics.page1.len + lf_statistics.page2.len) : lf_statistics.page1.len

function is_mobile() {
    return document.documentElement.clientWidth <= 750
}

//коэффициент наложения одного ряда блоков статистики на другой
var lf_overlap = is_mobile() ? 0 : 10
    //высота зоны статистики
var lf_height = is_mobile() ? (700 * lf_len) : (250 * (lf_len + 2))

console.log({ lf_height })

var lf_image
var lf_image2
var lf_image_start_pos = document.documentElement.clientHeight

function show_brain(position) {
    var a = brain.start_pos
    var b = (document.documentElement.clientHeight - brain.getSize()) / 2
    var delta = b - a
    var percent = delta / 100
    brain.setPos(a + position * percent)
}

function show_image(position) {
    var a = lf_image_start_pos
    var percent = a / 100

    lf_image.style.top = a - position * percent + 'px'
    lf_image2.style.top = a - position * percent + 'px'
}

function highlight_brain(position) {
    brain.setOpacity(100)
    brain.setSaturate(position)
    brain.setOpacity2(position)
}

function highlight_image(position) {

}

function fade_brain(position) {
    var oldsize = brain.getSize()

    brain.setSaturate(100 - position)
    brain.setOpacity(0)
    brain.setOpacity2(70 - position / 2)

    var newsize = brain.start_size - position + (window.innerWidth > 450 ? 50 : 0)
    var delta = oldsize - newsize

    brain.setSize(newsize)
    brain.setPos(brain.getPos() + delta / 2)

}

function fade_image(position) {
    //	lf_image.style.filter = 'saturate(' + (100 - position/2) + ')'
    //	console.log(lf_image.style.filter)
    lf_image2.style.background = 'RGBA(255,255,255,' + position / 200 + ')'
}

function hide_brain(position) {
    brain.setOpacity2(50 - position / 2)
    brain.setOpacity(0)
}

function hide_image(position) {
    //	console.log(position)
    var val = (50 - position / 2) / 100
    if (lf_image.style == undefined) lf_image.style = {}
    lf_image.style.opacity = val
    lf_image2.style.opacity = val
        //console.log({position,val})
}

var lf_is_mis = document.getElementsByClassName('lf-brain')
lf_is_mis.length > 0 ? lf_is_mis = true : lf_is_mis = false;

var sections = [
    ...(lf_is_mis ? [] : [{ height: 100, handler: function() {} }]),
    //картинка органа появляется снизу
    {
        "height": 1000,
        "handler": lf_is_mis ? show_brain : show_image
    },

    //картинка органа вспыхивает
    {
        "height": 200,
        "handler": lf_is_mis ? highlight_brain : highlight_image
    },

    //ожидание
    {
        "height": 200,
        "handler": function(pos) {
            //			console.log('зона ожидания: ' + pos)
        }
    },

    //картинка затемняется и уменьшается
    {
        "height": 450,
        "handler": lf_is_mis ? fade_brain : fade_image
    },
    //статистика
    {
        "label": "stats",
        "height": lf_height,
        "handler": function(position, dir) {
            //    		console.log({position})
            var f = lf_statistics.page2 ? lf_overlap : 0 //высота области в которой обе подсекции накладываются друг на друга
            var position1 //позиция в первой подсекции
            var position2 //во второй
            var f2 = f / 2 //половина области наложения
            var s1 = [0, 50 + f2] //первая подсекция
            var s2 = [50 - f2, 100] //вторая
            var percent = s1[1] / 100

            if (!lf_statistics.page2) {
                lf_statistics.page1.setValue(position, dir)
                return
            }

            if (position < s1[1]) {
                position1 = position / percent
                lf_statistics.page1.setValue(position1, dir)
            } else {
                lf_statistics.page1.setValue(100, dir)
            }

            if (position > s2[0]) {
                position2 = (position - s2[0]) / percent
                lf_statistics.page2.setValue(position2, dir)
            } else {
                lf_statistics.page2.setValue(0, dir)
            }

        }
    },
    //изчезновение картинки
    {
        "height": lf_is_mis ? 200 : 600,
        "handler": lf_is_mis ? hide_brain : hide_image
    }
]

var current = 0
var $$y = 0
var $a
var $b
var $flag = true
var placeholder = document.querySelector('#qbody')
var title = document.querySelector('title')
var stats = sections.find(function(section) {
    return section.label === 'stats'
})

var sum = 0

for (var i in sections) {
    var section = sections[i]
    section.start = sum
    sum += section.height
    section.end = sum
    section.index = i
}


var old_index

function getparams(index) {
    var l = lf_statistics.page1.len
    var f = lf_statistics.page2 ? (stats.height / 100 * lf_overlap / 2) : 0
        //	console.log({l,f})
        //	console.log({f})
    var page = index < l ? 1 : 2
    var start = page == 1 ? stats.start : stats.start + stats.height / 2 - f
        //	console.log({l,f,page,start,index})
    start = start + get_pad()
    var end = start + (lf_statistics.page2 ? (stats.height / 2 + f) : stats.height)
    var h = end - start
    if (index > l - 1) { index = index - l }
    var L = lf_statistics['page' + page].len
    var h1 = h / (is_mobile() ? L : L + 1)
    var a = start + h1 * index //позиция прокрутки когда блок только начинает появляться
    var b = a + (is_mobile() ? h1 / 4 : h1 / 2) //позиция прокрутки когда блок чуть чуть показался
    var c = a + (is_mobile() ? h1 / 2 : h1) //позиция когда блок появился полностью
    var d = c - b //на сколько пикселей прокрутить
        //	console.log({index,c,b,delta:b-c})
        //	console.log(stats)
        //	console.log({index,c,b})
        //	console.log({start,end,h,index,L,h1,a,b,c,d})
    return { a, b, c, d }
}


//прокрутить страницу до определённого блока статистики
function $scroll_to(index, reverse) {
    //console.log('scroll')
    //console.log({index,reverse})
    if (!$flag) { return; }

    $flag = false

    var { a, b, c, d } = getparams(index)
    $$y = (reverse ? c : b)
    window.scrollBy(0, $$y - pageYOffset)

    var y = pageYOffset
    var step = 15
    var offset = 0

    function move() {
        if (reverse) {
            $$y = -offset + y
        } else {
            $$y = offset + y
        }
        var $offset = $$y - pageYOffset
        scrollBy(0, $offset)
        offset = offset + step

        if (reverse) {
            if (offset < d) {
                requestAnimFrame(move)
            } else {
                $$y = b
                scrollBy(0, b - pageYOffset)
                if (reverse) {
                    current = current - 1
                } else {
                    current = current + 1
                }
                $a = current ? getparams(current - 1).c : -1
                $b = current == lf_len ? Infinity : getparams(current).b
                    //console.log({current,$a,$b})

                $flag = true

            }
        } else if (offset < d) {
            requestAnimFrame(move)
        } else {
            $$y = c
            scrollBy(0, c - pageYOffset)
            if (reverse) {
                current = current - 1
            } else {
                current = current + 1
            }
            $a = current ? getparams(current - 1).c : -1
            $b = current == lf_len ? Infinity : getparams(current).b
                //console.log({current,$a,$b})

            $flag = true
        }
    }

    move()
}



var btn_top
var h

function get_pad() {
    return btn_top - h + 100
}

window.addEventListener('load', function() {
    lf_image = document.querySelector('.lf-image')
    lf_image2 = document.querySelector('.lf-image2')
    if (lf_image) {
        lf_image.style.top = lf_image_start_pos + 'px'
        lf_image2.style.top = lf_image_start_pos + 'px'
    }

    var button = document.querySelector('.navbar-toggler')
    var html = document.querySelector('html')
    var button2 = document.querySelector('.close-mobile-nav')

    button.addEventListener('click', function() {
        //console.log('click')
        html.style.overflow = 'hidden'
    })

    button2.addEventListener('click', function() {
        console.log('clock')
        html.style.overflow = 'auto'
    })

})

on_really_load(function() {
    //console.log('load')
    h = document.documentElement.clientHeight

    //	scrollBy(0,-pageYOffset)



    if (!btn_top) {
        //			btn_top = document
        //				.querySelector('.lf-header-btn')
        //				.getBoundingClientRect()
        //				.top //+ pageYOffset
        //			console.log({btn_top,pageYOffset})
        btn_top = 750
    }


    var $$old_y = 0

    $a = current ? getparams(current - 1).c : -1
    $b = getparams(current).b
        //console.log({current,$a,$b})

    function f() {
        var Y = $flag ? pageYOffset : $$y

        var dir = Y > $$old_y ? 'down' : 'up'

        if (is_mobile()) {
            //			console.log({$flag,Y,$a,$b})
            if ($flag && dir === 'down' && Y > $b) {
                console.log('выход за нижнюю границу')
                $scroll_to(current)
                return;
            } else if ($flag && dir === 'up' && Y < $a) {
                console.log('выход за верхнюю границу')
                $scroll_to(current - 1, true)
                return;
            }
        }

        $$old_y = Y

        var pad = get_pad()
        stats.$start = stats.start + pad
        var y = Y - pad

        window.placeholder_height = placeholder.style.height = sum + pad + 'px'

        if (y < 0) {
            sections[0].handler(0)
            return;
        }

        var last_section = sections[sections.length - 1]
        var section = sections.find(function(section) {
            if (section.start <= y && section.end >= y) {
                return true
            }
        })

        var pos

        if (!section) {
            //			if(sections[0].start > y){
            //				section = sections[0]
            //				pos = 0
            //			}else{
            section = last_section
            pos = 100
                //			}
        }

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

        if (pos === undefined) {
            pos = (y - section.start) / (section.height / 100)
        }

        section.handler(Math.min(100, pos), dir)

        old_index = index
    }

    window.addEventListener('scroll', f)
    window.addEventListener('resize', f)
    setTimeout(function() {
        window.dispatchEvent(new Event('resize'));
    }, 1500)
})