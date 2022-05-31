@extends("layout.layout")
@section("title", "Empleos")
@section("assets")

    <link rel="stylesheet" href="css/jobForm.css">
@endsection
@section("content")
    <div class="wrap">
        <form id="ft-form" method="POST"  action="/empleos" enctype="multipart/form-data">
            @CSRF
            <fieldset>
                <legend>Empleo</legend>
                <label>
                    Aplica para *
                    <select name="empleosDisponibles" required>
                        <option>Caja</option>
                        <option>Limpieza</option>
                        <option>Bodega</option>
                        <option>Administración</option>
                    </select>
                </label>
            </fieldset>
            <fieldset>
                <legend>Datos Personales</legend>
                <div class="two-cols">
                    <label>
                        Primer y Segundo Nombre *
                        <input type="text" name="primerSegundoNombre" required>
                    </label>
                    <label>
                        Primer y Segundo Apellido *
                        <input type="text" name="primerSegundoApellido" required>
                    </label>
                </div>
                <div class="two-cols">
                    <label>
                        Nacionalidad:
                        <input type="text" name="nacionalidad">
                    </label>
                    <label>
                        Fecha de Nacimiento
                        <input type="date" name="fechaDeNacimiento">
                    </label>
                </div>
                <label>
                    Dirección
                    <input type="text" name="direccion">
                </label>

                <div class="two-cols">
                    <label>
                        Teléfono *
                        <input type="tel" name="telefono" required>
                    </label>
                    <label>
                        Correo electrónico *
                        <input type="email" name="email" required>
                    </label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Documentos Adicionales</legend>
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                <div class="two-cols">
                    <label>
                        Carta de Aplicación
                        <input type="file" name="carta_path" accept=".doc,.docx,.pdf">
                    </label>
                    <label>
                        Curriculum vitae
                        <input type="file" name="cv_path" accept=".doc,.docx,.pdf">
                    </label>
                </div>
                <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p>
            </fieldset>
            <div class="btns">
                <input type="text" name="_gotcha" value="" style="display:none;">
                <input type="submit" value="Subir Aplicación">
            </div>
        </form>
    </div>

@endsection
