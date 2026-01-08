# Empreender-UFRuralRJ

Este repositório contém o \*\*versionamento do `wp-content`\*\* do site institucional desenvolvido em WordPress, utilizando o \*\*Local WP\*\* como ambiente de desenvolvimento local.



O objetivo deste projeto é permitir que \*\*toda a equipe trabalhe de forma colaborativa\*\*, mantendo:

\- Temas

\- Plugins

\- Configurações versionáveis

\- Estrutura padronizada de desenvolvimento



📌 \*\*Importante:\*\*  

Este repositório \*\*não contém o WordPress completo\*\*, apenas a pasta `wp-content`, que é a prática recomendada em projetos reais com WordPress.



---



\## 📚 Tecnologias Utilizadas



\- \*\*WordPress\*\*

\- \*\*Local WP\*\*

\- \*\*Git\*\*

\- \*\*GitHub\*\*

\- \*\*PHP\*\*

\- \*\*HTML / CSS / JavaScript\*\*



---



\## 📁 Estrutura do Repositório



Este repositório representa \*\*exatamente\*\* a pasta `wp-content` do WordPress:

wp-content/

├── themes/ # Tema(s) do projeto

├── plugins/ # Plugins utilizados

├── uploads/ # NÃO versionado (ignorado pelo Git)

├── .gitignore

└── README.md



Cada pessoa da equipe:

1\. Instala o WordPress localmente (Local WP)

2\. Usa o \*\*mesmo `wp-content` versionado\*\*

3\. Trabalha com \*\*seu próprio banco de dados local\*\*


# 🛠️ CONFIGURAÇÃO DO AMBIENTE (PASSO A PASSO)



\## 1️⃣ Instalar o Local WP



Baixe e instale:

👉 https://localwp.com/



---



\## 2️⃣ Criar um site no Local WP



1\. Abra o \*\*Local WP\*\*

2\. Clique em \*\*Create a new site\*\*

3\. Nome do site: (ex: `projeto-Empreender-UFRRJ`)

4\. Ambiente: \*\*Preferred\*\*

5\. Crie um usuário admin (qualquer login)



Finalize a criação.



---



\## 3️⃣ Abrir a pasta do site



No Local WP:

\- Clique com o botão direito no site

\- \*\*Open site folder\*\*



Navegue até:



Local Sites/

└── nome-do-site/

└── app/

└── public/

\## 4️⃣ Preparar o wp-content



\### 🔴 Apague a pasta padrão:

app/public/wp-content





---



\## 5️⃣ Clonar o repositório



Dentro de:

app/public/





Execute:



```bash

git clone URL\_DO\_REPOSITORIO




Após isso abra o site pelo Local WP


