const deleteFormsEl=document.querySelectorAll('form.animal-destroyer')

deleteFormsEl.forEach((deleteFormsElement)=>{
    deleteFormsElement.addEventListener('submit', function(event){
        event.preventDefault();
        if(window.confirm('Do you want to delete this element?') === true){
            this.submit();
        }
    })
})

