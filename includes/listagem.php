<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($carteiras as $carteira){
    $resultados .= '<tr>
                      <td>'.$carteira->id.'</td>
                      <td>'.$carteira->ticker.'</td>
                      <td>'.$carteira->qtde.'</td>
                      <td>'.$carteira->p_medio.'</td>
                      <td>'.$carteira->c_atual.'</td>
                      <td>'.$carteira->p_unitario.'</td>
                      <td>'.$carteira->t_provento.'</td>
                      <td>'.$carteira->rendimento.'</td>
                      <td>'.($carteira->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($carteira->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$carteira->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$carteira->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }


 // $resultados = '';
 // foreach($vagas as $vaga){
 //   $resultados .= '<tr>
 //                     <td>'.$vaga->id.'</td>
 //                     <td>'.$vaga->titulo.'</td>
 //                     <td>'.$vaga->descricao.'</td>
 //                     <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
 //                     <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
 //                     <td>
 //                       <a href="editar.php?id='.$vaga->id.'">
 //                         <button type="button" class="btn btn-primary">Editar</button>
 //                       </a>
 //                       <a href="excluir.php?id='.$vaga->id.'">
 //                         <button type="button" class="btn btn-danger">Excluir</button>
 //                       </a>
 //                     </td>
 //                   </tr>';
 // }
//


  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova vaga</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>Ticker</th>
            <th>Produto</th>
            <th>D.Pagto</th>
            <th>Qtde</th>
            <th>P.Medio</th>
            <th>C.Atual</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>