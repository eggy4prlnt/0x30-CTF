<?php

setcookie('is_admin', 0);

?>
<script language=javascript>document.write(unescape('%3C%21DOCTYPE%20html%3E%0A%3Chtml%20lang%3D%22en%22%3E%0A%0A%3Chead%3E%0A%0A%20%20%20%20%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%0A%0A%0A%20%20%20%20%3Ctitle%3E0%20x%203%200%3C/title%3E%0A%20%20%20%20%3Clink%20rel%3D%22preconnect%22%20href%3D%22https%3A//fonts.googleapis.com%22%3E%0A%20%20%20%20%3Clink%20rel%3D%22preconnect%22%20href%3D%22https%3A//fonts.gstatic.com%22%20crossorigin%3E%0A%20%20%20%20%3Clink%20href%3D%22https%3A//fonts.googleapis.com/css2%3Ffamily%3DSpace+Mono%3Awght@400%3B700%26family%3DRubik%3Awght@400%3B500%26display%3Dswap%22%0A%20%20%20%20%20%20%20%20rel%3D%22stylesheet%22%3E%0A%0A%0A%0A%20%20%20%20%3Cstyle%3E%0A%20%20%20%20%20%20%20%20body%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20grid%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20place-items%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%20100vh%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20black%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20margin%3A%200rem%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20overflow%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20h1%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-family%3A%20%27Space%20Mono%27%2C%20monospace%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-size%3A%20clamp%283rem%2C%2010vw%2C%2010rem%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20white%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20padding%3A%200rem%20clamp%281rem%2C%202vw%2C%203rem%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border-radius%3A%20clamp%280.4rem%2C%200.75vw%2C%201rem%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20h1%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20white%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20black%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20/*%20--%20YouTube%20Link%20Styles%20--%20*/%0A%0A%20%20%20%20%20%20%20%20body.menu-toggled%3E.meta-link%3Espan%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20rgb%2830%2C%2030%2C%2030%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%23source-link%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20bottom%3A%2060px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%23source-link%3Ei%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20rgb%2894%2C%20106%2C%20210%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%23yt-link%3Ei%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20rgb%28239%2C%2083%2C%2080%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.meta-link%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20align-items%3A%20center%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20backdrop-filter%3A%20blur%283px%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.05%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border%3A%201px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200.1%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border-radius%3A%206px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20bottom%3A%2010px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20box-shadow%3A%202px%202px%202px%20rgba%280%2C%200%2C%200%2C%200.1%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20cursor%3A%20pointer%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20display%3A%20inline-flex%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20gap%3A%205px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20left%3A%2010px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20padding%3A%2010px%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20position%3A%20fixed%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20text-decoration%3A%20none%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20transition%3A%20background-color%20400ms%2C%20border-color%20400ms%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20z-index%3A%2010000%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.meta-link%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.1%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20border%3A%201px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200.2%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.meta-link%3Ei%2C%0A%20%20%20%20%20%20%20%20.meta-link%3Espan%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20height%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20line-height%3A%2020px%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20.meta-link%3Espan%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20color%3A%20white%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-family%3A%20%22Rubik%22%2C%20sans-serif%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20font-weight%3A%20500%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%3C/style%3E%0A%0A%20%20%20%20%3Cscript%3E%0A%20%20%20%20%20%20%20%20window.console%20%3D%20window.console%20%7C%7C%20function%20%28t%29%20%7B%20%7D%3B%0A%20%20%20%20%3C/script%3E%0A%0A%0A%0A%20%20%20%20%3Cscript%3E%0A%20%20%20%20%20%20%20%20if%20%28document.location.search.match%28/type%3Dembed/gi%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20window.parent.postMessage%28%22resize%22%2C%20%22*%22%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%3C/script%3E%0A%0A%0A%3C/head%3E%0A%0A%3Cbody%20translate%3D%22no%22%3E%0A%20%20%20%20%3Ch1%20data-value%3D%220x30%22%3E0x30%3C/h1%3E%0A%20%20%20%20%3Cscript%3E%0A%20%20%20%20%20%20%20%20const%20script%20%3D%20document.createElement%28%22script%22%29%3B%0A%0A%20%20%20%20%20%20%20%20script.src%20%3D%20%22https%3A//kit.fontawesome.com/1ee8f271b9.js%22%3B%0A%0A%20%20%20%20%20%20%20%20document.body.appendChild%28script%29%3B%0A%20%20%20%20%3C/script%3E%0A%20%20%20%20%3Cscript%20id%3D%22rendered-js%22%3E%0A%20%20%20%20%20%20%20%20const%20letters%20%3D%20%22ABCDEFGHIJKLMNOPQRSTUVWXYZ%22%3B%0A%0A%20%20%20%20%20%20%20%20let%20interval%20%3D%20null%3B%0A%0A%20%20%20%20%20%20%20%20document.querySelector%28%22h1%22%29.onmouseover%20%3D%20event%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20let%20iteration%20%3D%200%3B%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20clearInterval%28interval%29%3B%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20interval%20%3D%20setInterval%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20event.target.innerText%20%3D%20event.target.innerText.%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20split%28%22%22%29.%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20map%28%28letter%2C%20index%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20if%20%28index%20%3C%20iteration%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20return%20event.target.dataset.value%5Bindex%5D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20return%20letters%5BMath.floor%28Math.random%28%29%20*%2026%29%5D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%29.%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20join%28%22%22%29%3B%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20if%20%28iteration%20%3E%3D%20event.target.dataset.value.length%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20clearInterval%28interval%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20iteration%20+%3D%201%20/%203%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%2030%29%3B%0A%20%20%20%20%20%20%20%20%7D%3B%0A//%23%20sourceURL%3Dpen.js%0A%20%20%20%20%3C/script%3E%0A%0A%0A%0A%3C/body%3E%0A%0A%3C/html%3E'))</script>
<!-- To find the folder, I think you need rockyou.txt -->
