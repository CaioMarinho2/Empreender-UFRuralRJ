# Empreender-UFRuralRJ

Este repositório contém o **versionamento do código e da estrutura do site institucional Empreender-UFRuralRJ**, desenvolvido em **WordPress**, utilizando o **Local WP** como ambiente de desenvolvimento local.
---
## 🎯 Objetivo do Projeto
Permitir que **uma equipe trabalhe em conjunto** no desenvolvimento do site, de forma simples, organizada e segura, separando corretamente:
- Código (tema)
- Conteúdo (páginas, posts e mídia)
- Estrutura do site
📌 **Importante**
Este repositório **NÃO contém o WordPress completo** nem o banco de dados ativo.
Ele contém **apenas os arquivos necessários para versionamento**.
---
## 📚 Tecnologias Utilizadas
- **WordPress**
- **Local WP**
- **Git**
- **GitHub**
- **PHP**
- **HTML / CSS / JavaScript**
---
## 📁 Estrutura do Repositório
```text
wp-content/
├── themes/ # Tema do site (layout, header, footer, estilos)
├── uploads/ # Imagens e mídias utilizadas nas páginas
├── plugins/ # Pasta para os plugins do WordPress
├── zipsbackups/ # Exportações das versões finalizadas oo site (zip)
├── exports/ # Exportações de conteúdo do WordPress (XML)
├── index.php
├── .gitignore
└── README.md

📌 Função de Cada Pasta
themes/
Contém o tema do site
Responsável pelo layout e identidade visual

uploads/
Contém imagens e mídias utilizadas no site

exports/
Contém arquivos .xml exportados do WordPress

zipsbackups/
Contem oz zips responsaveis pelo backpus de versões do site

plugins/
Pasta para os plugins do Wordpress

Importação feita manualmente no painel do WordPress
🛠️ Configuração do Ambiente (Passo a Passo)

1️⃣ Instalar o Local WP
Baixar e instalar em:
https://localwp.com/

2️⃣ Criar um site no Local WP
Create a new site
Nome: empreender-ufruralrj
Ambiente: Preferred
Criar usuário administrador (uso local)

3️⃣ Abrir a pasta do site
No Local WP:
Botão direito no site
Open site folder
Estrutura esperada:
text
Local Sites/
└── empreender-ufruralrj/
└── app/
└── public/

4️⃣ Preparar o wp-content
Dentro de app/public, apagar o wp-content padrão.
⚠️ Obrigatório para evitar conflitos.

5️⃣ Clonar o repositório
Dentro de app/public:
bash
git clone URL_DO_REPOSITORIO
Renomear a pasta clonada para:
text
wp-content

🔁 Fluxo de Trabalho em Equipe

Antes de começar
bash
git pull
Alterações de código
bash
git add .
git commit -m "Descrição clara da alteração"
git push

Alterações de conteúdo
Editar páginas no WordPress
Ferramentas → Exportar → All content
Salvar o XML em exports/

📌 Nunca editar as mesmas páginas ao mesmo tempo.
📌 Considerações Finais

Este fluxo foi escolhido para:
Facilitar o aprendizado em WordPress
Permitir trabalho colaborativo
Evitar conflitos e perda de conteúdo
Preparar o projeto para evolução futura

Qualquer alteração estrutural deve ser combinada previamente entre os membros da equipe.
