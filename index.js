var tl = new TimelineMax({repeat: -1, repeatDelay: 1});

TweenMax.to("#wind", 0.5, {
  strokeDashoffset: -60,
  repeat: -1,
  ease: Linear.easeNone
});

tl.set("#lid", { transformOrigin: "center top" })
tl.set("#letter, #positive-mask", { transformOrigin: "center top" })

tl.fromTo("#letter", 0.5, { opacity: 0 }, { opacity: 1, ease: Power4.easeOut }, 0)
tl.fromTo("#letter, #positive-mask", 0.5, { scale: 2 }, { scale: 1, ease: Power4.easeOut }, 0)
tl.to("#letter, #positive-mask", 1, { y: 250 }, 0)
tl.fromTo("#envelope, #negative-mask", 0.5, { opacity: 0 }, { opacity: 1 }, 0)
tl.fromTo("#envelope, #negative-mask", 1, { y: 200 }, { y: 0, ease: Power2.easeOut }, 0)
tl.fromTo("#lid", 0.5, { scaleY: -1 }, { scaleY: 1 }, "-=0.4")
tl.to("#wind, #envelope", 0.6, { x: 40, ease: Power2.easeInOut }, "-=0.2")
tl.fromTo("#wind", 0.3, { opacity: 0 }, { opacity: 1 }, "-=0.4")
tl.to("#wind, #envelope", 0.3, { x: 60, opacity: 0, ease: Power2.easeIn }, "+=2")