<div class="content-wrapper">
  <!-- Encabezado -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header bg-pink text-white">
          <h1 class="card-title">Inicio de sesión</h1>
        </div>
        <div class="card-body">
          <p>
            La interfaz de inicio de sesión es el primer punto de contacto del usuario con el sistema. 
            Su función principal es restringir el acceso a usuarios no autorizados y determinar el tipo de privilegios 
            (gerente o empleado) que se habilitarán tras el ingreso.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Campos de texto -->
      <div class="card">
        <div class="card-header bg-pink text-white">
          <h2 class="card-title">Campos de texto</h2>
        </div>
        <div class="card-body">
          <p>
            La interfaz presenta dos campos de texto diseñados para la captura de credenciales:
          </p>
          <ul>
            <li><strong>Usuario:</strong> campo para ingresar el nombre con el que está registrado el usuario en el sistema.</li>
            <li><strong>Contraseña:</strong> clave otorgada al usuario por el gerente al momento de su registro.</li>
          </ul>
        </div>
      </div>

      <!-- Funcionamiento del botón -->
      <div class="card">
        <div class="card-header bg-pink text-white">
          <h2 class="card-title">Funcionamiento del botón</h2>
        </div>
        <div class="card-body">
          <p>
            Al presionar el botón <strong>"Iniciar sesión"</strong>, el sistema realiza una consulta a la base de datos local 
            para verificar la existencia y coincidencia de los datos ingresados. 
          </p>
          <p>
            Si la validación es correcta, el sistema redireccionará automáticamente al usuario hacia su interfaz 
            correspondiente (Gerencia o Empleados) según su perfil almacenado.
          </p>
        </div>
      </div>
    </div>
  </section>
</div>
