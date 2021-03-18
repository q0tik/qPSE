document.getElementById('me').onclick = function() {
    var enjoyhint = new EnjoyHint({});
    var array_hints = [
        {
            selector : '#telegram',
            event : 'next',
            description : 'my telegram :3',
            shape : 'circle',
            showSkip : false,
            showNext : true,
            showPrev : false
        },
        {
            selector : '#git',
            event : 'next',
            description : 'my github -_-',
            shape : 'circle',
            showSkip : false,
            showNext : true,
            showPrev : false
        }
    ];

    enjoyhint.set(array_hints);
    enjoyhint.run();
};