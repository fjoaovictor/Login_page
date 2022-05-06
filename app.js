const sign_in_btn = document.querySelector('#sign-in-button');
const sing_up_btn = document.querySelector('#sign-up-button');


const container = document.querySelector('.container');

sing_up_btn.addEventListener('click', () => {
    container.classList.add('sign-up-mode');
   
    
})
sign_in_btn.addEventListener('click', () => {
    container.classList.remove('sign-up-mode');
    
})

/* Mascara CPF e Telefone atualizada */

$("#cpf").mask("999.999.999-99");

$("#tel").mask("(99) 99999-9999")


/*Mascara de CPF e telefone 

    function mascara_cpf(){

       var cpf = document.getElementById('cpf');

       if(cpf.value.length == 3 || cpf.value.length == 7){
            cpf.value += '.';
       }
       else if(cpf.value.length == 11){
           cpf.value += '-'
       }
    }

    function mascara_tel(){
        var tel = document.getElementById('tel')

       
        if(tel.value.length == 3){
            tel.value += ') '
        }
        else if(tel.value.length == 10){
            tel.value += '-'
        }
    }

    */


    