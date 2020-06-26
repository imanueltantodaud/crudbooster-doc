@extends("layout")
@section("content")

    <h1>Installation</h1>

    <p>
        Below are CRUDBooster system requirements
    </p>
    <p>
        <ul>
            <li>PHP version 7.2 or above</li>
            <li>Laravel 5.7 or above</li>
            <li>Composer</li>
            <li>OPCache PHP Extension (Very Recommended!)</li>
            <li>BCMath PHP Extension</li>
            <li>Ctype PHP Extension</li>
            <li>JSON PHP Extension</li>
            <li>Mbstring PHP Extension</li>
            <li>OpenSSL PHP Extension</li>
            <li>PDO PHP Extension</li>
            <li>Tokenizer PHP Extension</li>
            <li>XML PHP Extension</li>
            <li>Mod Rewrite Enable for Apache</li>
        </ul>
    </p>

    <h2 class="mt-4">Composer</h2>
    <p>If you don't have a composer, please install it first. <a href="https://getcomposer.org/download/" target="_blank">Click here to see the tutorial</a></p>

    <h2 class="mt-4">Laravel</h2>
    <p>You should install and use the required version of Laravel. <a href="https://laravel.com/docs/6.x" target="_blank">Click here to see the tutorial</a></p>
    <p>
        <pre><code class="language-bash">composer create-project --prefer-dist laravel/laravel curdbooster "5.8.*"</code></pre>
    </p>

    <h2 class="mt-4">CRUDBooster</h2>
    <p>On Laravel root directory, run the following command: </p>
    <p>
        <pre><code class="language-bash">composer require crocodicstudio/crudbooster=6.0-beta.1</code></pre>
    </p>
    <p>
        Create a new empty database, and set the <code>.env</code> file like below
    </p>
    <p>
        <pre><code class="language-bash">DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>
    </p>
    <p>
        After finishing the installation, CRUDBooster needs to extract the asset. Run the following command:
    </p>
    <p>
        <pre><code class="language-bash">php artisan crudbooster:install</code></pre>
    </p>
    <p>
        and follow the instruction.
    </p>

@endsection
