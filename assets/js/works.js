'use strict'
{
    
    // パソコンボタン
    const buttonPC = document.getElementById('pc_btn');
    // スマホボタン
    const buttonSP = document.getElementById('sp_btn');

    // パソコン画面
    const screenPC = document.querySelector('.capture__pc');
    // スマホ画面
    const screenSP = document.querySelector('.capture__sp');
    

    buttonPC.addEventListener('click',function(){   // パソコンボタンをクリックした時
        buttonPC.classList.remove('active');        // 'buttonPC' から 'active' が外される
        buttonSP.classList.remove('active');        // 'buttonSP' から 'active' が外される 
        screenPC.classList.remove('active');        // 'screenA' から 'active' が外される
        screenSP.classList.remove('active');        // 'screenB' から 'active' が外される
    });

    buttonSP.addEventListener('click',function(){   // スマホボタンをクリックした時
        buttonPC.classList.add('active');           // 'buttonPC' に 'active' が追加される
        buttonSP.classList.add('active');           // 'buttonSP' に 'active' が追加される
        screenPC.classList.add('active');           // 'screenA' に 'active' が追加される
        screenSP.classList.add('active');           // 'screenB' に 'active' が追加される
    });
}