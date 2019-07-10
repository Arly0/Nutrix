var timer = new easytimer.Timer();
timer.start({countdown: true,startValues: {days: 15, hours: 13, minutes: 7, seconds: 23}});
timer.addEventListener('secondsUpdated', function (e) {
    $('.timer__days .day').html(timer.getTimeValues().days);
    $('.timer__days .hour').html(timer.getTimeValues().hours);
    $('.timer__days .min').html(timer.getTimeValues().minutes);
    $('.timer__days .sec').html(timer.getTimeValues().seconds);
});