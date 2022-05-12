{% extends 'partials/body.twig.php'  %}

{% block title %}Nova conta - Mini Framework{% endblock %}

{% block body %}
    
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                           
                        </div>
                        <div class="col align-self-center">
                            <h5>Criar conta</h5>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <form class="was-validated" action="{{BASE}}insert-perfil/" method="post">
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" name="txtUsername" placeholder="Digite o nome do usuario"
                            id="username" required>
                        <label for="username">Usuário</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <select class="form-control" name="txtPais" id="country" required>
                            < {% for pais in paises %}
                            
                            <option value="{{pais.country_id}}">{{pais.name}}</option>
                            {% endfor %}
                        </select>
                        <label for="country">pais</label>
                    </div>
                    
                    <div class="form-floating is-valid mb-3">
                        <input type="text" name="txtContacto" class="form-control"
                            placeholder="Email or Phone" id="emailphone" required>
                        <label for="emailphone">Email or Telefone</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="password" name="txtPassword" class="form-control" placeholder="Digite a sua senha..."
                            id="password" required>
                        <label for="password">Senha</label>
                    </div>
                    
                    <p class="mb-3"><span class="text-muted">Ao clicar criar, estará concordando com os nossos</span> <a
                            href="#">Termos e Condições</a></p>
                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Criar
                    </button>
                </form>
            </div>
            
        </div>
    </main>



       
{% endblock %}