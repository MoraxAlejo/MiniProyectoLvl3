
// seguridad para no meter datos vacios a la base de datos a los correos 
document.getElementById("formulary").addEventListener("submit", function(event) {
    let campo = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (campo === '') {
      alert('El campo está vacío porfavor introduzca un correo');
      event.preventDefault();
    } else if (pass === '') { 
            alert('El campo está vacío porfavor introduzca una contraseña');
            event.preventDefault();
          
    }
  });

