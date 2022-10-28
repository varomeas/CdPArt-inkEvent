
        function journuit(){
            const body=document.body;
            const themeSwitch=document.getElementById('themeLogo');
            body.classList.toggle('nuit');
            if(body.classList.contains('nuit')){
                themeSwitch.innerHTML='&#9788;';
              } else{
                themeSwitch.innerHTML='&#9789;';
              }
        }

        function setupListeners(){
            const themeSwitch=document.getElementById('themeLogo');
            themeSwitch.addEventListener('click',journuit);
        }

        window.addEventListener('load',setupListeners);