
# API Vagas -

Esse pequeno projeto se trata de uma API feita em Laravel que retorna dados de vagas cadastradas no banco de dados. Ele utiliza conceitos de resources, rotas, injeção de dependênciasn relacionamentos, entre outros tópicos relacionados ao Laravel.
É um projeto extremamente rápido que visa apenas explorar o retorno dos dados e os resources, logo, não houve preocupação com autenticação e outros aspectos de segurança.




## Documentação da API

#### Retorna todos os itens

```http
  GET /api/vagasanalise
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
|  |  | Retorna todos as vagas detalhadamente |

### Resultado (Todas as vagas)
```json
{
    "id": 8,
    "status": {
        "status": "EM ANÁLISE"
    },
    "setor": {
        "setor": "tecnologia"
    },
    "tipo_contrato": {
        "tipo_contrato": "clt"
    },
    "titulo_vaga": "DESENVOLVEDOR WEB",
    "descricao": "Estamos contratando desenvolvedor web.",
    "data_publicacao": "2023-08-03",
    "data_expiracao": "2023-08-03",
    "cidade_atuacao": "JAÚ",
    "faixa_salarial": {
        "faixa_salarial": "À COMBINAR"
    },
    "anunciante": {
        "razao_social": "DESENVOLVEDOR LTDA",
        "cnpj": "99.999.999/9999-99",
        "telefone": "9999999-9999",
        "email": "email@gmail.com"
    },
    "modalidade": {
        "modalidade": "presencial"
    }
}

```


#### Retorna um item

```http
  GET /api/vagasanalise/{id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `int` | **Obrigatório**. O ID da vaga que você quer |

### Resultado
```json
{
    "id": 8,
    "status": {
        "status": "EM ANÁLISE"
    },
    "setor": {
        "setor": "tecnologia"
    },
    "tipo_contrato": {
        "tipo_contrato": "clt"
    },
    "titulo_vaga": "DESENVOLVEDOR WEB",
    "descricao": "Estamos contratando desenvolvedor web.",
    "data_publicacao": "2023-08-03",
    "data_expiracao": "2023-08-03",
    "cidade_atuacao": "CIDADE",
    "faixa_salarial": {
        "faixa_salarial": "À COMBINAR"
    },
    "anunciante": {
        "razao_social": "DESENVOLVEDOR LTDA",
        "cnpj": "99.999.999/9999-99",
        "telefone": "9999999-9999",
        "email": "email@gmail.com"
    },
    "modalidade": {
        "modalidade": "presencial"
    }
}

```
