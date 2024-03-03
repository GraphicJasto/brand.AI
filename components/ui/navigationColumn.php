<header id="compNavigationColumn">

    <ul>
        
<li>
    <a onclick="Tile.add('components/ui/indexTile.php', 'tileContainer', 'flex', 'tile')">
    <i class="material-icons-outlined">emergency</i>
   <p>Brand</p>
    </a>
</li>

<li>
    <a>
    <i class="material-icons-outlined">edit</i>
   <p>Create</p>
    </a>
</li>


<li>
    <a>
    <i class="material-icons-outlined">alternate_email</i>
   <p>Read</p>
    </a>
</li>




    </ul>



</header>

<head>
    <style>
    /*High Structure navigation Component*/
    #compNavigationColumn {
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;

        width: 16%;
        max-width: 96px;
        min-width: 80px;

        z-index: 1;
    }



    /* NAV icon range Container*/


    #compNavigationColumn ul {

        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;

        gap: 20px;
        padding: 16px 0px 16px 0px;

        width: 100%;
    }

    #compNavigationColumn ul li {

        display: flex;
        flex-flow: nowrap;
        justify-content: center;
        align-items: center;

        width: 100%;
        height: 56px;


    }

    #compNavigationColumn li a {

        display: flex;
        flex-flow: column nowrap;
        justify-content: space-between;
        align-items: center;

        width: 80px;
        height: 48px;

        cursor: pointer;


    }

    #compNavigationColumn a i {

        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;

        width: 56px;
        height: 32px;


        border-radius: 100px;
    }

    #compNavigationColumn a i:hover {

        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;

        width: 56px;
        height: 32px;

        background-color: var(--hover);
        border-radius: 100px;
    }

    #compNavigationColumn a i:active {

        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;

        width: 56px;
        height: 32px;

        background-color: rgb(255, 213, 159);
        border-radius: 100px;
    }


    #compNavigationColumn a p {

        font-size: 14px;
        font-family: Inter Tight, Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: 550;
        color: #00000045;
    }
    </style>

    <style>
    @media (max-aspect-ratio: 4/5) {

        /*High Structure navigation Component*/
        #compNavigationColumn {

            flex-flow: row nowrap;

            width: 100%;
            height: 72px;
            max-width: none;
            padding: 0 24% 0 24%;


        }

        /* NAV icon range Container*/

        #compNavigationColumn ul {

            display: flex;
            flex-flow: row nowrap;

            height: 72px;


        }

        #compNavigationColumn ul li {

            display: flex;
            justify-content: center;
            align-items: center;

            width: 100%;




        }

        #compNavigationColumn li a {

            display: flex;
            flex-flow: column nowrap;
            justify-content: space-between;
            align-items: center;

            width: 80px;
            height: 48px;

            cursor: pointer;


        }

        #compNavigationColumn a i {

            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;

            width: 56px;
            height: 32px;


            border-radius: 100px;
        }

        #compNavigationColumn a i:hover {

            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;

            width: 56px;
            height: 32px;

            background-color: rgb(255, 233, 205);
            border-radius: 100px;
        }

        #compNavigationColumn a i:active {

            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;

            width: 56px;
            height: 32px;

            background-color: rgb(255, 213, 159);
            border-radius: 100px;
        }


        #compNavigationColumn a p {

            font-size: 14px;
            font-family: Inter Tight, Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-weight: 550;
            color: #00000045;
        }
    }
    </style>
</head>