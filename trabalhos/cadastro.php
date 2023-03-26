<?php

    $IPVA = 0;
    $nome = "none";
    $marca = "none";
    $ano = 0;
    $NPlaca = 0;
    $valor = 0;
    $TaxaIPVa = 0;
    
    //entrada

    printf("Nome do Veiculo: \n");
    fscanf(STDIN," %f \n", $nome);
    
    printf("Marca do veiculo: \n");
    fscanf(STDIN," %f \n", $marca);
    
    printf("Ano do Veiculo: \n");
    fscanf(STDIN," %d \n", $ano);
    
    printf("Placa do Veiculo: \n");
    fscanf(STDIN," %f \n", $NPlaca);
    
    printf("Valor do Veiculo: \n");
    fscanf(STDIN," %d \n", $valor);
    
    printf("Taxa de ipva do Veiculo: \n");
    fscanf(STDIN," %d \n", $TaxaIPVa);
    
    //processamento
    
    $IPVA = $valor * 0.6;
    
    //saida

    printf("Nome do veiculo: $nome \n");
    printf("Marca do veiculo: $marca \n");
    printf("Ano do veiculo: $ano \n");
    printf("Placa do veiculo: $NPlaca \n");
    printf("Valor do veiculo: $valor \n");
    printf("Taca de IPVA do veiculo: $TaxaIPVa \n");
    printf("------------------------------- \n");
    printf("IPVA: $IPVA \n");
    
    
    
    //copia não comédia

    //BY: Funj
    
    
?>