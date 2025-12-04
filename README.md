# Projeto Laravel com Tailwind CSS

## 🚀 Como rodar o projeto

### 1. Instalar dependências

```bash
composer install
npm install
```

### 2. Configurar ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Rodar o projeto

**Em um terminal:**

```bash
php artisan serve
```

**Em outro terminal:**

```bash
npm run dev
```

Acesse: `http://localhost:8000`

## 🎨 Estrutura de Assets

-   **CSS**: `resources/css/app.css` - Configuração do Tailwind CSS
-   **JS**: `resources/js/app.js` - JavaScript da aplicação
-   **Views**: `resources/views/` - Templates Blade
-   **Imagens**: `public/images/` - Arquivos de imagem

## 🎨 Cores Customizadas (Tailwind)

As cores customizadas estão definidas em `resources/css/app.css`:

-   `bg-brand-blue` - Azul da marca (#013a63)
-   `bg-brand-orange` - Laranja da marca (#fca311)
-   `bg-brand-orange-hover` - Laranja hover (#e59500)
-   `bg-page-bg` - Fundo da página (#fdfdfc)
-   `text-page-text` - Texto da página (#1b1b18)

## 📝 Uso no Blade

```blade
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## 🛠️ Build para Produção

```bash
npm run build
```
