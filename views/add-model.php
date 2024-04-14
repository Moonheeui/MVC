<main>
    <div class="container">
        <div class="dashboard-flex">
            <div class="side-bar">
                <?php
                include_once("views/nav.php");
                ?>
            </div>

            <div class="content">
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

                include_once("controllers/connection.php");
                include_once("controllers/controller-model.php");

                ?>
            </div>
        </div>
    </div>
</main>

<!-- <script>
    let modelSearch = [];
    let modelExists = false;

    const forms = document.querySelector('#modelForm');
    forms.addEventListener('keyup', (event) => {
        //console.log(event.target.id);
        if (event.target.id == "modelName") {
            typeSearch(event);
        }
    })

    function typeSearch(event) {
        const modelInput = document.querySelector('#modelName');
        let result = [];
        let input = modelInput.value;
        if (input.length) {
            result = modelSearch.filter((keyword) => {
                return keyword.toLowerCase().includes(input.toLowerCase());
            });
            //console.log(result); 
        }
        display(result);
    }

    function display(result) {
        const resultsBox = document.querySelector('#modelResults');
        const content = result.map((list) => {
            return `<li onclick=selectInput(this)> ${list}</li>`;
        });

        if (!result.length) {
            resultsBox.innerHTML = '';
        } else {
            resultsBox.innerHTML = `<ul> ${content.join('')}</ul>`;
        }
    }

    function selectInput(list) {
        modelExists = true;
        console.log(modelExists);
        document.querySelector('#modelName').value = list.innerHTML;
        document.querySelector('#modelResults').innerHTML = '';
    }
</script> -->