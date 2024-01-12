Array.from(document.getElementByTagName('input')).forEach((e , i) => {
    e.addEventlistener('keyup',(e1) => {

        if(e.value.length>0){

            document.getElementsByClassName('bi-caret-down-fill')[i].style.color = "yellow";
        }
        else
        {
            document.getElementsByClassName('bi-caret-down-fill')[i].style.transform= "rotate(0deg)";
        }

    })

})