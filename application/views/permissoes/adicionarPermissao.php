<div class="span12" style="margin-left: 0">
    <form action="<?php echo base_url(); ?>index.php/permissoes/adicionar" id="formPermissao" method="post">

        <div class="span12" style="margin-left: 0">

            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="fas fa-lock"></i>
                    </span>
                    <h5>Cadastro de Permissão</h5>
                </div>
                <div class="widget-content">

                    <div class="span6">
                        <label>Nome da Permissão</label>
                        <input name="nome" type="text" id="nome" class="span12" />

                    </div>
                    <div class="span6">
                        <br />
                        <label>
                            <input name="marcarTodos" type="checkbox" value="1" id="marcarTodos" />
                            <span class="lbl"> Marcar Todos</span>

                        </label>
                        <br />
                    </div>

                    <div class="control-group">
                        <label for="documento" class="control-label"></label>
                        <div class="controls">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>

                                        <td>
                                            <label>
                                                <input name="vCliente" class="marcar" type="checkbox" checked="checked" value="1" />
                                                <span class="lbl"> Visualizar Cliente</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="aCliente" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Adicionar Cliente</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="eCliente" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Editar Cliente</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <input name="dCliente" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Excluir Cliente</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <label>
                                                <input name="vProduto" class="marcar" type="checkbox" checked="checked" value="1" />
                                                <span class="lbl"> Visualizar Produto</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="aProduto" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Adicionar Produto</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="eProduto" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Editar Produto</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="dProduto" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Excluir Produto</span>
                                            </label>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>

                                  

                                  

                                    <tr>

                                        <td>
                                            <label>
                                                <input name="vVenda" class="marcar" type="checkbox" checked="checked" value="1" />
                                                <span class="lbl"> Visualizar Venda</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="aVenda" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Adicionar Venda</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="eVenda" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Editar Venda</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="dVenda" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Excluir Venda</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <label>
                                                <input name="vGarantia" class="marcar" type="checkbox" checked="checked" value="1" />
                                                <span class="lbl"> Visualizar Garantia</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="aGarantia" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Adicionar Garantia</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="eGarantia" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Editar Garantia</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="dGarantia" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Excluir Garantia</span>
                                            </label>
                                        </td>

                                    </tr>

                                   

                                    <tr>

                                        <td>
                                            <label>
                                                <input name="vLancamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                                <span class="lbl"> Visualizar Lançamento</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="aLancamento" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Adicionar Lançamento</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="eLancamento" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Editar Lançamento</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="dLancamento" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Excluir Lançamento</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <label>
                                                <input name="rCliente" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Relatório Cliente</span>
                                            </label>
                                        </td>

                                       

                                        <td>
                                            <label>
                                                <input name="rProduto" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Relatório Produto</span>
                                            </label>
                                        </td>

                                    

                                        <td>
                                            <label>
                                                <input name="rVenda" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Relatório Venda</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="rFinanceiro" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Relatório Financeiro</span>
                                            </label>
                                        </td>
                                        <td colspan="2"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <label>
                                                <input name="cUsuario" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Configurar Usuário</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="cEmitente" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Configurar Emitente</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="cPermissao" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Configurar Permissão</span>
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                <input name="cBackup" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Backup</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>
                                                <input name="cAuditoria" class="marcar" type="checkbox" value="1" />
                                                <span class="lbl"> Auditoria</span>
                                            </label>
                                        </td>
                                        
                                        <td colspan="2"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>



                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/permissoes" id="" class="btn"><i class="fas fa-backward"></i> Voltar</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </form>

</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#marcarTodos").change(function() {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });



        $("#formPermissao").validate({
            rules: {
                nome: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Campo obrigatório'
                }
            }
        });



    });
</script>
