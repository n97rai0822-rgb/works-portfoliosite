'use strict'
{
    /*====================
    スクロールイベント
    ====================*/
    const targets = document.querySelectorAll('.fadeIn');

    const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
        }
    });
    });

    targets.forEach(target => observer.observe(target));

}