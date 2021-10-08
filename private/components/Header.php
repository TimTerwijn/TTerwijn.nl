<header>
    <section>
        <a href="/" title="Open the home page"><p>Home</p></a>
        <a href="/curriculum-vitae" title="Open my CV"><p>CV</p></a>
        <a href="/portfolio" title="Open my portfolio"><p>Portfolio</p></a>
    </section>
    <section>
        <a href="/" title="Open the home page">TTerwijn.nl</a>
    </section>

    <!-- Todo add breadcrubs -->
</header>

<script>

</script>

<style>
    header{
        display: grid;
        grid-template-columns: 50% 50%;

        padding: 0 10%;
        background-color: #0079b1;
        margin: 0.5rem 0;
    }

    header a{
        color: white;
        text-decoration: none;
    }

    header>section{
        display: grid;
        height: 100%;
    }

    header>section>a{
        display: grid;
        align-items: center;
        height: 3rem;
    }

    /* Menu buttons */
    header>section:first-child{
        grid-template-columns: auto auto auto;
        justify-self: start;
    }

    header>section:first-child>a{
        border-right: 1px solid white;
        width: 93px;
    }

    header>section:first-child>a>p{
        text-align: center;
    }   

    header>section:first-child>a:first-child{
        border-left: 1px solid white;
    }

    /* Home button */
    header>section:last-child{
        justify-self: end;
    } 
    
    header>section:last-child>a{
        font-family: monospace;
        font-size: 2rem;
    }

    /* mobile */
    @media only screen and (max-width: 681px) {
        header{
            grid-template-columns: 100%;
        }

        header>section:first-child {
            grid-template-columns: auto auto auto auto;
            justify-self: center;
        }

        header>section:first-child>a:last-child {
            display: grid;
        }
        
        /* Home button */
        header>section:last-child{
            display: none;
        }
    }

    /* mobile small */
    @media only screen and (max-width: 368px) {        
        header>section:first-child {
            grid-template-columns: auto auto;
            justify-self: center;
        }

        header>section:first-child>a{
            border-top: 1px solid white;
        }

        header>section:first-child>a:nth-child(1),
        header>section:first-child>a:nth-child(2) {
            border-top-width: 0;
        }

        header>section:first-child>a:nth-child(3){
            border-left: 1px solid white;
        }
    }
</style>