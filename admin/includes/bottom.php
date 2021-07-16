<script>
        let arrow = document.querySelectorAll('.arrow');

        for (let i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=> {
                let arrowParent = e.target.parentElement.parentElement;

                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

    </script>
    <!-- SCRIPT DE LA CHART -->
    <script>
        var months = ["Ene", "Feb", "Mar", "Abrl", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
                
            Morris.Line({
                element: 'myfirstchart',
                    data: [{
                        m: '2021-01', // <-- valid timestamp strings
                        a: 10 
                    }, {
                        m: '2021-02',
                        a: 23
                    }, {
                        m: '2021-03',
                        a: 26
                    }, {
                        m: '2021-04',
                        a: 30
                    }, {
                        m: '2021-05',
                        a: 15
                    }, {
                        m: '2021-06',
                        a: 30
                    }, {
                        m: '2021-07',
                        a: 50
                    }, {
                        m: '2021-08',
                        a: 43
                    }, {
                        m: '2021-09',
                        a: 37
                    }, {
                        m: '2021-10',
                        a: 25
                    }, {
                        m: '2021-11',
                         a: 10
                    }, {
                        m: '2021-12',
                        a: 49
                    }, ],
                    xkey: 'm',
                    ykeys: ['a'],
                    ymax: 50, 
                    labels: ['Reservas'],
                    xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
                        var month = months[x.getMonth()];
                        return month;
                    },
                    dateFormat: function(x) {
                        var month = months[new Date(x).getMonth()];
                        return month;
                    },
            });
    </script>
    <!-- SCRIPT DE LA PIECHART -->
    <script>
        Morris.Donut({
        element: 'pie-chart',
        data: [
            {label: "15:30", value: 20},
            {label: "16:00", value: 5},
            {label: "16:30", value: 15},
            {label: "17:00", value: 5},
            {label: "17:30", value: 15},
            {label: "18:00", value: 10},
            {label: "18:30", value: 30},
        ]
        });
    </script>
</body>
    <footer>
        <a href="index.php" class="logo-footer">ƒood<span>.</span></a>
    </footer>
</html>