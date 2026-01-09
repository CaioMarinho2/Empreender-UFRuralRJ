# \# Empreender-UFRuralRJ

# 

# Este repositório contém o \*\*versionamento do código e da estrutura do site institucional Empreender-UFRuralRJ\*\*, desenvolvido em \*\*WordPress\*\*, utilizando o \*\*Local WP\*\* como ambiente de desenvolvimento local.

# 

# ---

# 

# \## 🎯 Objetivo do Projeto

# 

# Permitir que \*\*uma equipe trabalhe em conjunto\*\* no desenvolvimento do site, de forma simples, organizada e segura, separando corretamente:

# 

# \- Código (tema e plugins)

# \- Conteúdo (páginas, posts e mídia)

# \- Backups completos do site

# 

# 📌 \*\*Importante\*\*  

# Este repositório \*\*NÃO contém o WordPress completo\*\* nem o banco de dados ativo.  

# Ele contém \*\*apenas o que deve ser versionado\*\*.

# 

# ---

# 

# \## 📚 Tecnologias Utilizadas

# 

# \- \*\*WordPress\*\*

# \- \*\*Local WP\*\*

# \- \*\*Git\*\*

# \- \*\*GitHub\*\*

# \- \*\*PHP\*\*

# \- \*\*HTML / CSS / JavaScript\*\*

# 

# ---

# 

# \## 📁 Estrutura do Repositório

# 

# ```text

# Empreender-UFRuralRJ/

# ├── wp-content/                # Código usado pelo WordPress (VERSIONADO)

# │   ├── themes/                # Tema do site (layout, header, footer, estilos)

# │   ├── plugins/               # Plugins utilizados no projeto

# │   └── index.php

# │

# ├── exports/                   # Exportações de conteúdo do WordPress (XML)

# │   ├── README.md

# │   └── export-YYYY-MM-DD.xml

# │

# ├── zipsbackups/                   # Backups completos do site (ZIP do Local WP)

# │   └── empreender-YYYY-MM-DD.zip

# │

# ├── .gitignore

# └── README.md

# 📌 Função de Cada Pasta

# wp-content/ — VERSÃO PRINCIPAL DO PROJETO

# Contém tema e plugins

# 

# É a única pasta utilizada diretamente pelo WordPress

# 

# Deve ser copiada para dentro do Local WP

# 

# É versionada com Git

# 

# Tudo que envolve layout global (header, footer, estilos) fica aqui

# 

# exports/

# Contém arquivos .xml exportados pelo WordPress

# 

# Utilizado para compartilhar conteúdo entre os membros da equipe

# 

# Pode conter:

# 

# Páginas

# 

# Posts

# 

# Menus

# 

# Referências de mídia

# 

# zipsbackups/

# Contém arquivos .zip exportados pelo Local WP

# 

# Representa um backup completo do site

# 

# Usado apenas como segurança

# 

# 📌 Manter apenas a versão mais recente

# 📌 Não usar para trabalho diário

# 

# 🛠️ Configuração do Ambiente (Passo a Passo)

# 1️⃣ Instalar o Local WP

# Baixar e instalar:

# https://localwp.com/

# 

# 2️⃣ Criar um site no Local WP

# Abrir o Local WP

# 

# Clicar em Create a new site

# 

# Nome do site (exemplo): empreender-ufruralrj

# 

# Ambiente: Preferred

# 

# Criar um usuário administrador (uso apenas local)

# 

# 3️⃣ Abrir a pasta do site

# No Local WP:

# 

# Botão direito no site

# 

# Open site folder

# 

# Estrutura esperada:

# 

# text

# Local Sites/

# └── empreender-ufrural/

# &nbsp;   └── app/

# &nbsp;       └── public/

# 4️⃣ Preparar o wp-content

# Dentro da pasta public, apagar a pasta padrão:

# 

# text

# 

# app/public/wp-content

# ⚠️ Obrigatório para evitar conflitos.

# 

# 5️⃣ Clonar o repositório

# Ainda dentro de app/public, executar:

# 

# bash

# git clone URL\_DO\_REPOSITORIO

# 6️⃣ Renomear a pasta clonada

# Renomear para:

# 

# text

# 

# wp-content

# Estrutura final:

# 

# text

# 

# app/public/

# ├── wp-admin/

# ├── wp-includes/

# ├── wp-content/

# ├── wp-config.php

# └── index.php

# Abrir o site normalmente pelo Local WP.

# 

# 📌 A partir daqui, não é necessário copiar pastas manualmente.

# 

# 🔁 Fluxo de Trabalho em Equipe

# Antes de começar

# bash

# 

# git pull

# Alterações de código (tema ou plugin)

# bash

# 

# git add .

# git commit -m "Descrição clara da alteração"

# git push

# Alterações de conteúdo (páginas e posts)

# Editar páginas/posts no painel WordPress

# 

# Ferramentas → Exportar

# 

# Exportar All content

# 

# Salvar o arquivo em exports/

# 

# Importar no outro ambiente conforme combinado

# 

# 📌 Nunca editar as mesmas páginas ao mesmo tempo.

# 

# Backup completo do projeto

# Local WP → Export site (ZIP)

# 

# Salvar em zipsbackups/

# 

# Manter apenas o backup mais recente

# 

# ❌ Não editar o mesmo conteúdo simultaneamente

# 

# ✔ Trabalhar sempre dentro do wp-content

# ✔ Usar exports/ apenas para troca de conteúdo

# ✔ Usar zipsbackups/ apenas como segurança

# ✔ Sempre executar git pull antes de começar

# 

# 📌 Considerações Finais

# Este fluxo foi escolhido para:

# 

# Facilitar o aprendizado em WordPress

# 

# Permitir trabalho colaborativo sem conflitos

# 

# Evitar perda de conteúdo

# 

# Possibilitar futura migração para um fluxo profissional

# 

# Qualquer alteração estrutural deve ser combinada previamente entre os membros da equipe.

