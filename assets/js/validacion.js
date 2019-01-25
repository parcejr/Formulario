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
    valor: [null, 'equipos_electromecanicos','equipo_electromecanicos_Gestión','Gestión_implementación','implementación','red_transporte','Red_De_Transporte_RF__Calidad_Red_De_Datos','RF-Calidad_De_Datos_RF_Planeación_De_Diseño']
  },
  methods:{
    
    revisar(e){
      this.errores = [];
      console.log(this.celular);
      console.log(this.telefono);
      this.dato = this.selected
      if(this.nombre == null || this.nombre.length == 0 || /^\s+$/.test(this.nombre)){
        this.errores.push('Error!! en el campo nombre');   
      }
      if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)/.test(this.email))){
        this.errores.push('Tu correo electronico no es valido');
      }
      if((this.telefono == null || this.telefono == 0)  && (this.celular == null || this.celular == 0)){
        this.errores.push('Error en tu celular o telefono');
      }


        // if( !(/^\d{7}$/.test(this.telefono)) || !(/^\d{10}$/.test(this.celular))){
        //   this.errores.push('tu numero de telefono debe tener 7 digitos  o tu celular 10 digitos');    
        // }
      
      if(this.telefono > 0 || !this.telefono == null){
        if(!(/^\d{7}$/.test(this.telefono))){
          this.errores.push('tu numero telefonico no tiene 7 digitos');
        }
      }
      if(this.celular > 0 || !this.celular == null){
        if(!(/^\d{10}$/.test(this.celular))){
          this.errores.push('tu numero celular no tiene 10 digitos');
        }
      }


      if(this.edad <= 0 && this.edad > 130){
        this.errores.push('valores erroneos en el campo edad');
      }


      if(this.selected == null || this.selected == 0){
        this.errores.push('Selecciona un campo en el Area de Trabajo');
      }
      if(!this.errores.length){
        return true;
      }
      e.preventDefault();
      
      
    }
  }
})
