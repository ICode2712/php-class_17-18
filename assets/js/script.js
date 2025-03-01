        function updateTime() {
            let now = new Date();
            document.getElementById("datetime").innerHTML = now.toLocaleString();
        }
        setInterval(updateTime, 1000);
