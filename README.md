# Coding Challenge

Utilizando o framework Rails desenvolva:

1. Utilizando o framework Rails crie um sistema para uma ong de animais;
2. O sistema terá que ter acesso somente por usuários autenticados;
3. Esse sistema deve ter os seguintes CRUDS:
  * Animais - listagem, cadastro, edição e remoção
  * Doações - listagem, cadastro, edição e remoção
  * Veterinários - listagem, cadastro, edição e remoção
  * Usuários administrativos - listagem, cadastro, edição e remoção
  * Histórico de atendimento do animal - listagem, cadastro
4. Regras:
  * Animais (nome, imagem, idade, espécie, raça, observação) - observação pode ser nula, imagem somente png ou jpg
  * Doações (dados do doador, tipo, quantidade) - tipo pode ser somente ração ou medicamentos, doação pode ser especifica para um animal ou não
  * Veterinários (nome, telefone, crv, endereço)
  * Histórico de atendimento (data, animal, veterinário, observação) - todos os campos são obrigatórios. Deve ser apresentado apenas na tela de edição do animal.
5. Escrever o COMO SUBIR A APLICAÇÃO abaixo;

```
O repositório deve ser forkado e feito PR com a implementação realizada.
```

# Critério de avalição

1. Entender os conceitos de OO, framework e linguagem
2. Code design
3. Habilidade de escrever boa documentação
4. Error handling 
5. BONUS: build e/ou deploy scripts
6. BONUS: Docker script 
7. BONUS: Teste unitário e automação de testes

# Como subir a aplicação

### Get started
````
$ git clone https://github.com/mupper-marketing/challenge.git
$ cd challenge
````
#### Configurando o projeto
Instalar as dependências e configurar o banco:
```
$ bin/setup
```
Executar os testes:
```
$ rspec .
```
Subir a aplicação:
```
$ rails s
```

Acessar em: http://localhost:3000

#### Usando Docker
Construir imagem Docker:
```
$ docker build -t challenge/bixano .
```
Subir container Docker a partir da imagem criada:

1 -container em background:
```
$ docker run -d -p 3000:3000 challenge/bixano
```
2 - container em modo interativo(acompanhamento dos logs):
```
$ docker run -ti -p 3000:3000 challenge/bixano
```

Acessar em: http://localhost:3000
