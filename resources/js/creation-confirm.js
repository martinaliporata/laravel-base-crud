document.getElementById('creation-form').addEventListener('submit', function(event){
    event.preventDefault();
    if(window.confirm('Are you sure?') === true){
        this.submit();
    }
})
