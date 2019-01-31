const vm = new Vue({
    el:'#form1',
    data:{
        errors: [],
        name: null,
        email: ''
    },
    methods:{
        getUsers(e){   
            if(!this.error.length){
                return true;
            }
            this.email = document.querySelector('#email');
            e.preventDefault();
        }
    }
})

