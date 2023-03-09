function showPopup(element){
    
    let popups = ["pop1", "pop2", "pop3", "pop4"];
    let elemento = element.getAttribute("popup");

    for(let i = 0; i < 4; i++){
        let popup = document.querySelector("[popup="+popups[i]+"]");
        if(elemento != popups[i] && popup.style.visibility == 'visible'){
            popup.style.visibility = 'hidden';
            popup.classList.remove('active');            
        }
    }

    if(element.style.visibility == 'visible'){ 
        element.style.visibility = 'hidden';
	    element.classList.remove('active');
    }
    else{
        element.style.visibility = 'visible';
        element.classList.add('active'); 
    }
}