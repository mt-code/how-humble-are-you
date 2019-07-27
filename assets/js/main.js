function reveal(isHumble) {
    var messageElement = document.querySelector('.humble-reveal__content p');
    messageElement.innerHTML = isHumble
        ? 'Oh, how humble of you...'
        : "That wasn't very humble...";

    var bounce = new Bounce();
    bounce.translate({
        from: { x: 0, y: 0 },
        to: { x: 0, y: window.innerHeight },
        duration: 2000,
        stiffness: 2,
        bounces: 10
    })
    .rotate({
        from: 25,
        to: 0
    });

    bounce.applyTo(document.querySelectorAll(".humble-reveal"));
}