{% extends 'partials/body.twig.php' %}

{% block title %}Editar thumb{% endblock %}

{% block body %}
<div class="max-width mt-3">
    <h1>Editar thumb</h1>

    <hr>
    
    <form action="{{BASE}}?url=updateThumb&id={{id}}" method="post" id="frmEditarThumb" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flThumb">Thumb</label>
                    <input type="file" class="form-control-file" id="flThumb" rows="10" name="flThumb" accept="image/*">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="dvalert">
                    <div class="alert alert-info">Preencha corretamente todos os campos.</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <button class="btn btn-success" type="submit">Alterar</button>
            </div>
        </div>

    </form>
</div>
{% endblock %}