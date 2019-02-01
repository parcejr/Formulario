// const form = document.querySelector('#form1');
// form.addEventListener('click', function(e){
//     const edad = document.getElementById('EDAD').value;
//     const email = document.getElementById('EMAIL').value;
//     const telefono = document.getElementById('TELEFONO').value;
//     const nombre = document.getElementById('NOMBRE').value;
//     const direccion = document.getElementById('DIRECCION').value;
//     const celular = document.getElementById('CELULAR').value;
//     const area_trabajo = document.getElementById('select1').selectIndex;
//     const errors = [];

//     if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)/.test(email))){
//         errors.push('error');
//     }
//     console.log(errors);

//     if(!errors.length){
//         return true;
//     }
//     e.preventDefault();


// })
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
        selected: '',
        antiguo: '',
        BD:[],
        
    },
    created(){
        this.baseDatos();
    },

    methods:{
        validaciones(e){    
            this.errores = [];
            this.nombre = document.getElementById('NOMBRE').value;
            this.email = document.getElementById('EMAIL').value;
            this.edad  = document.getElementById('EDAD').value;
            this.telefono = document.getElementById('TELEFONO').value;
            this.direccion = document.getElementById('DIRECCION').value;
            this.celular = document.getElementById('CELULAR').value;
            this.selected = document.getElementById('select1').selectIndex;
            this.antiguo = document.getElementById('NOMBRE_ant').value;
            for(item of this.BD){
                

                console.log(this.nombre);
                if(item.nombre === this.nombre && item.nombre != this.antiguo){
                    this.errores.push('Este nombre ya existe en tu base de datos');
                }
            }
            
            
            if(this.nombre == null || this.nombre.length == 0 || /^\s+$/.test(this.nombre)){
                this.errores.push('Error!! en el campo nombre');   
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
              if(!this.errores.length){
                return true;
              }
              e.preventDefault();  

        },
        baseDatos(){
            fetch('http://localhost/Formulario/index.php/Ejecutar/ajax', {
                method: 'POST'
            }).then(data => data.json()).then(data =>{
                for(item of data){
                    this.BD.push(item);
                }
            })
        }
    }
})