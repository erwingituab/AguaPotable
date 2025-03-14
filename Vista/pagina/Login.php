<section class="vh-100" style="background-color: #fff;">
<header class="header d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #A73683; height:59px;"></header>    
    <div class="container py-5 h-100">        
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="p-6" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-6 d-none d-flex flex-wrap justify-content-center ">
                            <img src="Vista/Img/sidesoft.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
                        </div>
                        <!--otra mitad-->
                        <div class="col-md-6 col-lg-6 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                            <form id="frmLogin" autocomplete="off">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>                                
                                </div>
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión</h5>
                                <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="txtusuario" class="form-control form-control-lg" />
                                <label class="form-label" for="txtusuario">Usuario</label>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="txtclave" class="form-control form-control-lg" />
                                <label class="form-label" for="txtclave">Password</label>
                                </div>                  
                                <div class="pt-1 mb-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btnsubmit btn-lg btn-block" type="submit">Ingresar</button>
                                </div>
                                <div class="mensaje alert-danger" style="display: none;" role="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Error!</strong><p id="error"></p>
                                </div>
                                <a class="small text-muted" href="#!">Olvidaste tu contraseña?</a>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="#!"
                                    style="color: #393f81;">Registrate aqui.</a></p>
                                <a href="#!" class="small text-muted">Condiciones de uso.</a>
                                <a href="#!" class="small text-muted">politica de Privacidad.</a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>  
</div>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="background-color: #BB4A4F; height:60px;"></footer>
</section>