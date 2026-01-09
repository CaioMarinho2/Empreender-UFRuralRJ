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

## 🔌 Plugins Utilizados no Projeto

Este projeto utiliza **plugins de terceiros amplamente adotados pela comunidade WordPress**, instalados diretamente pelo painel administrativo.

⚠️ **Importante:**  
Os plugins **NÃO são versionados no Git**.  
Eles são **documentados aqui** para que qualquer membro da equipe consiga reproduzir o ambiente corretamente.

---

## 🧱 Construtor e Layout

- **Elementor**  
  Construtor visual de páginas (drag and drop).  
  Utilizado para criar todo o layout das páginas do site sem necessidade de código.

- **ElementsKit Lite**  
  Conjunto de widgets adicionais para o Elementor.  
  Utilizado para criação de header, footer, menus, seções avançadas e componentes visuais.

---

## ✍️ Conteúdo e Produtividade

- **Duplicate Page**  
  Permite duplicar páginas e posts com um clique.  
  Utilizado para agilizar a criação de novas páginas a partir de modelos existentes.

---

## 📄 Importação e Versionamento de Conteúdo

- **WordPress Importer**  
  Plugin oficial para importação de conteúdo via arquivos `.xml`.  
  Utilizado para importar páginas, posts, menus e estruturas de conteúdo entre ambientes.

---

## 🔄 Controle de Versões e Segurança para Iniciantes

- **WP Rollback**  
  Permite reverter plugins e temas para versões anteriores.  
  Utilizado como medida de segurança durante testes e aprendizado.

---

## 📝 Formulários

- **WPForms Lite**  
  Plugin de criação de formulários.  
  Utilizado para formulários de contato e coleta de informações básicas.

---

## 🔍 SEO (Otimização para Buscadores)

- **Yoast SEO**  
  Plugin completo de SEO.  
  Utilizado para orientar boas práticas de SEO on-page, geração de sitemap e análise de conteúdo.

---

## ♿ Acessibilidade

- **Ally – Web Accessibility & Usability**  
  Plugin focado em acessibilidade digital.  
  Utilizado para melhorar a usabilidade e acessibilidade do site, especialmente importante em sites institucionais.

---

## ⚙️ Administração do WordPress

- **Admin and Site Enhancements (ASE)**  
  Plugin para melhorias administrativas e ajustes na interface do WordPress.  
  Utilizado de forma moderada para facilitar a experiência no painel administrativo.

---

## 📊 Monitoramento, Tags e Integrações

- **PixelYourSite – Your Smart PIXEL (TAG) & API Manager**  
  Plugin para integração de ferramentas de monitoramento e marketing.  
  Utilizado para:
  - Meta Pixel (Facebook)
  - Google Analytics (GA4)
  - Google Tag Manager
  - Inserção de scripts no header e footer  
  *(Uso previsto principalmente quando o site estiver em produção).*

---

## 🌐 Tradução e Multilíngue

- **Translate WordPress with GTranslate**  
  Plugin de tradução automática baseado no Google Translate.  
  Utilizado para tornar o site multilíngue, permitindo acesso ao conteúdo em diferentes idiomas.

---

## 🗂️ Backup e Migração (Uso Pontual)

- **Duplicator**  
  Plugin de migração e backup do site.  
  Utilizado apenas em situações específicas de migração, não no fluxo diário.

- **UpdraftPlus – Backup/Restore**  
  Plugin de backup do WordPress.  
  Utilizado de forma complementar, quando necessário, fora do fluxo principal de versionamento.

---

## 📌 Observações Finais

- Nenhum plugin acima faz parte do versionamento Git.
- Todo novo membro da equipe deve instalar manualmente os plugins listados.
- A lista de plugins pode evoluir conforme o projeto cresce, devendo ser sempre atualizada neste README.


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
