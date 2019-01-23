const vm = new Vue({
  el:'#form1',
  data:{
    errores: [], 
    nombre:null,
    edad: null,
    email: null,
    telefono: null,
    direccion: null,
    celular: null,
    selected: null,

  },
  methods:{
    revisar(e){
      this.errores = [];

      this.dato = this.selected
      if(this.nombre == null || this.nombre.length == 0 || /^\s+$/.test(this.nombre)){
        this.errores.push('Error!! en el campo nombre');   
      }
      if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(this.email))){
        this.errores.push('Tu correo electronico no es valido');
      }
      if(this.telefono == null || this.telefono == 0 && this.celular == null || this.celular == 0){
        this.errores.push('Tienes que ingresar un numero telefonico y/o un numero Celular');
      }else{
        if( !(/^\d{7}$/.test(this.telefono)) && !(/^\d{10}$/.test(this.celular))){
          this.errores.push('tu numero de telefono debe tener 7 digitos  o tu celular 10 digitos');    
        }
      
      }
      if(!this.errores.length){
        return true;
      }
      e.preventDefault();
      
      
    }
  }
})
