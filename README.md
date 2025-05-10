# Crossing the Line: XSS Unleashed

![XSS Unleashed](/src/img/elytron.png)


**Crossing the Line: XSS Unleashed** se trata de um projeto pessoal para contribuir com o *mindset hacking* compartilhando meus 10 centavos com a comunidade.

Ao longo do tempo em que faço parte da comunidade de cibersegurança, tive e tenho contato com vários profissionais que, falando exclusivamente do ponto de vista técnico, são excepcionais, outros muito bons e outros nem tanto.

Faço questão de frisar o termo “ponto de vista técnico”, pois este conhecimento, por mais que seja determinante, ainda não é suficiente para moldar um bom profissional. Também não vou entrar em assuntos generalizados de soft skills, pois isso se tornaria um papo para outras ocasiões.

O lugar onde quero chegar é: na dificuldade que vejo com frequência de um cara bom, saber comunicar o impacto dos findings em um projeto de cibersegurança ao ponto que seu trabalho seja compreendido e reconhecido pelo cliente (sim, quem tem que compreender o risco de uma vulnerabilidade é o cliente, não os outros coleguinhas da área), em outras palavras, saber hackear não significa absolutamente nada na área de segurança, SE você não souber demonstrar o impacto do seu hacking.

Exemplificando isso tudo aí de cima, vamos supor que o cara encontrou um XSS em um ponto crítico de uma aplicação, e é capaz de exfiltrar diversos dados sensíveis, aí na prova de conceito apresentada pro cliente, a única imagem apresentada é aquele famoso alert(1).

Ok, o alert(1) prova que existe um XSS ali, mas o seu cliente não sabe, e muitas vezes nem tem a obrigação de saber que a execução de uma carga JavaScript no navegador da vítima pode levar a uma infinidade de coisas das mais diversas criticidades. Pra ele seu ataque resultou em abrir um “pop-up” no navegador.

Por outro lado, temos outro viés, onde o cara encontra um XSS, porém não consegue exfiltrar um cookie, por exemplo, seja por um hardening nos headers da aplicação, ou qualquer outro motivo, e por conta disso, não tem a “malicia” de montar um ataque mais elaborado. Com isso, ele acaba categorizando este finding com severidade baixa justamente por não saber ou ter a criatividade de montar ataques mais complexos com JavaScript para causar mais impacto, pois em todo seu aprendizado, nunca acabou saindo do alert(1).

Sabendo que eu não sou um dos caras excepcionais, mas também não sou dos piores (espero eu), vou deixar meus 10 centavos aqui. Com base em alguns treinamentos que já fiz, e outros ataques que já realizei (profissionalmente), decidi criar um material com a intenção de abrir o leque no que diz respeito a ataques baseados em JavaScript.

Se tratam de 21 “tasks“ baseadas em ataques XSS que evoluem sua complexidade gradativamente. Nada que seja muito complexo no final, afinal a intenção não é ensinar JavaScript, mas sim a “maldade” em causar impacto neste tipo de ataque.

---

## Obtendo o Projeto

Para obter a cópia do projeto, clone o repositório.

```bash
git clone https://github.com/Elytron-Security/xss_unleashed.git && cd xss_unleashed
```

Para "*buildar*" o contêiner:

```bash
docker-compose up -d --build
```

Após sua execução, ao visitar seu *localhost* no navegador, seu menu principal estará disponível.

---

## Documentação

A documentação de todo o projeto, juntamente com as referências de cada *task* podem ser encontradas no meu blog:

- [https://h41stur.com/posts/beyond-the-alert/](https://h41stur.com/posts/beyond-the-alert/)

