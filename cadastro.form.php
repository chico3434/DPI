<form method="post" action="cadastro.efetivar.php">
    <div class="frame alert">
        <div class="row">
            <div class="col-sm-12"><h1>Dados pessoais do profissional</h1></div>
        </div>
        <div class="row">
            <div class="form-group col-sm-8">
                <label class="control-label" for="nome">Nome*</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label" for="dataNascimento">Data Nascimento</label>
                <input type="text" class="form-control data" id="dataNascimento" name="dataNascimento">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="control-label" for="email">Email*</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-sm-6">
                <label class="control-label" for="sexo">Sexo</label>
                <select class="form-control" id="sexo" name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h1>Dados técnicos do profissional</h1></div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="control-label" for="profissao">Profissão*</label>
                <select class="form-control" name="profissao" id="profissao">
                <option value="">Selecione a Profissão: </option>
                    <?php listaProfissoes(); ?>
                </select>
            </div>
            <div class="form-group col-sm-6">
              <label class="control-label" for="salario">Salário*</label>
              <small id="rs" class="text-muted">R$</small>
              <select name="salario" id="salario" class="form-control"></select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
            </div>
        </div>
    </div>
</form>
<script>
    $('#salario').attr('disabled', 'disabled');
    $('#profissao').on('change', function(){
        $('#salario').attr('disabled', 'disabled');
        $('#salario').empty();
        var codProfissao = $('#profissao').val();
        $.post('salarios.php', { cod: codProfissao }, function(dados){
            console.log(dados);
            var salarios = JSON.parse(dados);
            console.log(salarios);
            if(salarios.length > 0){
                $('#salario').removeAttr('disabled');
                $('#salario').append('<option>Selecione o Salário: </option>');
                for(var i = 0; i < salarios.length; i++){
                    console.log(salarios[i].valor);
                    $('#salario').append('<option>' + salarios[i].valor + '</option>');  
                }
            }
        });
    });
</script>