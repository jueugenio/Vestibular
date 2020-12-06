(function(win,doc){
    'use strict';
    
    //Delete
    function confirmDel(event){
        event.preventDefault();
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja deletar este item?")){
        let ajax=new XMLHttpRequest();
        ajax.open("Excluir", event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN',token);
        ajax.onreadystatechange=function(){
            if(ajax.readyState === 4 && ajax.status === 200){
                win.location.href="perfils";
            }
        };
        ajax.send();
        }else{
            return false;
        }
    }
    if(doc.querySelector('.jsdel')){
            let btn=doc.querySelectorAll('.jsdel');
            for(let i=0; i<btn.length;i++){
            btn[i].addEventListener('click',confirmDel,false);
            }
    }

})(window,document);
