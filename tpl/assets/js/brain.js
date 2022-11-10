var brain = (function() {
    var el = document.querySelector('.lf-brain')
    var el2 = document.querySelector('.lf-brain2')
    var pos = 0
    var size = 0
    var sat = 0
    var opacity = 0
    var opacity2 = 0
    var video = ''


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

    //если ширина окна больше 1000 то картинка будет иметь ширину 700
    if (w > 1000) {
        return 700
            //если ширина окна меньше тысячи но больше 800 картинка будет 450
    } else if (w > 800) {
        return 450
            //если ширина окна меньше 800, ширина картинки будет 70% оот ширины окна
    } else if (w > 600) {
        return w * 0.85
    } else {
        return w * 0.95
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



brain.start_pos = document.documentElement.clientHeight
    //document.querySelector('.lf-header-btn').getBoundingClientRect().top

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