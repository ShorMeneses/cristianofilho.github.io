
# clone-sites

Node.js e suas bibliotecas de web scraping ferramentas capazes de automatizar o trabalho de copiar (ou clonar) e baixar um site inteiro diretamente da sua versão online (URL).

Nesse artigo, vou te guiar durante o processo – extremamente simples – de copiar e baixar um site inteiro e seus arquivos Javascript e CSS de forma rápida usando Node.js.

Vale ressaltar que você precisa instalar o Node.js e seu gerenciador de pacotes (npm) na sua máquina. Não vou entrar nos detalhes disso pois já existem milhares de vídeos e artigos na internet sobre o tema. Se você usa Windows, é só entrar no site do Node.js, fazer o download e instalar.

Com o node instalado, abra o seu terminal (Linux) ou o seu PowerShell (Windows) e navegue até a pasta onde você quer copiar o site em questão. Execute o comando:

npm install website-scraper website-scraper-puppeteer
Ele vai instalar as bibliotecas website-scraper e website-scraper-puppeteer através do npm na sua máquina.

Agora, crie um arquivo index.js nesta mesma pasta onde o comando acima foi executado, adicione o seguinte código Javascript e substitua a URL do site que você quer baixar/copiar/clonar, assim como a pasta onde você quer que os arquivos sejam salvos.


   
    
    const scrape = require('website-scraper');
    const PuppeteerPlugin = require('website-scraper-puppeteer');
    const path = require('path');

    scrape({
     urls: ['https://cristianofilho.github.io'],

  
    directory: path.resolve(__dirname, 'pasta-do-site'),
    
    
    plugins: [ 
        new PuppeteerPlugin({
            launchOptions: { 
                headless: true
            },
            scrollToBottom: {
                timeout: 10000, 
                viewportN: 10 
            }
        })
    ]
    });

Primeiramente execute o comando npm na pasta onde se encontra o index.js e o package-lock.json:

    npm install website-scraper

    npm install website-scraper-puppeteer





    


Código Javascript para baixar os arquivos HTML, CSS, Javascript e HTML de um site na internet de forma automática.
Agora volte para o terminal (ou PowerShell) e rode o script que você acabou de criar usando:

node index.js
O script vai baixar o site completo (em HTML), assim como seus arquivos Javascript e CSS para o seu computador.


