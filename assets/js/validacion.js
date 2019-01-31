const vm = new Vue({
  el:'#form1',
  data:{
    errores: [], 
    // variables de input
    nombre:null,
    edad: null,
    email: null,
    telefono: null,
    direccion: null,
    celular: null,
    selected: null,
    valor: [null, 'equipos_electromecanicos','equipo_electromecanicos_Gestión','Gestión_implementación','implementación','red_transporte','Red_De_Transporte_RF__Calidad_Red_De_Datos','RF-Calidad_De_Datos_RF_Planeación_De_Diseño'],
    comp_nombre:[]
  },
  //ejecutar la función getUsers antes  de cargar el DOM
  created(){
    this.getUsers();
  },
  //ejecutar la función lowecase, cuando un dato es cambiado, la ejecuta
  updated() {
    this.lowercase();
  },

  // funciones
  methods:{
    //cambia el campo nombre a solo letras en minuscula
    lowercase(){
      this.nombre = this.nombre.toLowerCase();
    },
    //conexion con la base de datos
    getUsers(){
      fetch('http://localhost/Formulario/index.php/Ejecutar/Ajax',{
        method: 'POST'
      }).then(data => data.json()).then(data =>{
          for(item of data){
            this.comp_nombre.push(item);
          }
      }) 
    },
    //validaciones
    revisar(e){
      this.errores = [];
      this.dato = this.selected
      if(this.nombre == null || this.nombre.length == 0 || /^\s+$/.test(this.nombre)){
        this.errores.push('Error!! en el campo nombre');   
      }
      for( let value of this.comp_nombre){
         if( value.nombre == this.nombre){
           this.errores.push('Este nombre ya existe en la base de datos');
           break;
         }
      }
      if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)/.test(this.email))){
        this.errores.push('Tu correo electronico no es valido');
      }
      if((this.telefono == null || this.telefono == 0)  && (this.celular == null || this.celular == 0)){
        this.errores.push('Error en tu celular o telefono');
      }   
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
