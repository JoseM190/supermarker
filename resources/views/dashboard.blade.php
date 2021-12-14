<x-app-layout>
    <style>
        .juice {
            background-image: url('https://i.ibb.co/SN2Sp4T/juice.png');
        }

        .juice2 {
            background-image: url('https://gelantibacterialmexico.com/wp-content/uploads/2020/09/marca-de-gel-antibacterial-recomendada-por-la-oms-fabricas-para-llenado-de-gel-antibacterial-precios-gel-antibacterial-por-galon-gel-antibacterial-mexico-wr-mexico-gel-antibacteria.jpg');
        }

        .juice3 {
            z-index: 10;
            position: relative;
        }

        .juice3::after {
            content: '';
            position: absolute;
            opacity: ;
            z-index: -999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url('https://image.freepik.com/vector-gratis/producto-alimenticio-esquema-patrones-fisuras-colocados-categorias-comida-supermercado-colorear-papel-tapiz_497027-482.jpg');
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }

        .product {
            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUVExcTFRUXGBcZGhkaGhoZGhwXGRkaGRcZGRkYGRkaHysjGh8pIBcZJDUkKCwuMjIyGSE3PDcxOysxMi4BCwsLDw4PHRERHDEpISgzMTExMTE7NjExMTEyMTIxMTExMTExMTExMTExMTIxMTExMTExMTExLjExMTExMTExMf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xABNEAACAAQCBQgFBQ8DAwUBAAABAgADBBESIQUxQVFhBhMicYGRofAyUrHB0RQjVKKzBxUWJDM0QkNTcnOy0uHxYoKShJTTY2SDk8Il/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQG/8QALhEAAgIABAQFBAIDAQAAAAAAAAECEQMSITFBUZGxBBMiUoEycaHwYcEU0eEF/9oADAMBAAIRAxEAPwDO2hQhFzRujJ0/FzMsvhtitbLFfDe524T3RwnqG0lbKUK8GvwWrfo7/V+Mc/BWt+jv9X+qHlfIz82HuXVAeFBj8Fa36O/1f6o7+C1b9Hf6vxgyvkHmw9y6oDR0QYPJWs+jP9X+qF+C1b9Hf6v9UGV8g82HuXVAi0dEF/wVrPoz/V/qjv4LVn0Z/q/1QZXyDzYe5dUBrQ6C/wCC1Z9Gf6v9UL8GK36O/wBX+qDK+QebD3LqgSsdBgsOS9Z9Gf6v9UO/Bes+jv8AV+MGV8hebh+5dUCwwh1oJjkxWfR3+r8YcOTNZ9Hf6vxgyvkLzYe5dQWBDwIJfg1V/R3+r8YcOTdX9Hf6vxgyvkLzcP3LqDlEPEEV5OVf0dvq/GH/AIOVX7BvD4wZXyF5sPcuoOEPWCI5PVX7BvD4xIOT9V+wbw+MGV8iXiw9y6g9YlUReXQNT+xbw+MSLoOp/Yt4fGDK+RDxIc0UViZYtroSo/Yt4fGHroSo/ZN4fGDK+RDxIc0VFiQGO1VK8sgOpUnMX2iI1MINHsSXhRyFCAxEGtDsRRVxBIN6TVl+umQDg1og/iNd10f20yKjv1O3F+n5XdArnn9du8/GO88/rN3mI4lkUsxwSkuY4GsojMB1kDKEU8qG88/rt3mO8+/rN3mGIhJsASdVgLm41i0SGmmeo/8AxPwgD0nOef1m7zC55/WbvMJadzmEcg6jhOfVlCFO98OB72vbCb21XtbVDF6Rc83rN3mO8+3rt3mFMp3UXZGUbypA7yI6tJMIuJbkHMEKxBHXaAPSc59/XbvMdE5/XbvMNmyHXNkZRvKke0R2ZJdRdkZRvKkA9pEAekdzr+u3eYcJreu3eYZLlMQSFYgayASB1kaoaDCH6ScTX9Zu8w4TW9Zu8xADDwYBUTCa3rN3mHCa3rN3mIQYcDAKkTrNb1m7zDxMb1m7zECxIDAS4k4mt6zd5iRZjes3eYrLEqwENFhZrese8xIs1t57zFZYkBgE0WFmnee8xIsxvWPeYrqYerQENBnSh+apv3X/AJzA8Rd0mfmab9x/54oAmHLcyht17kkKI4USUY6DGiPzGu66P7aZAcCDOiPzGu66P7aZFR36nZi/T8rugdoynEyfJlE5TJktDnY4WcBrEaja9uMbP7oPKKoo5ySaVkly5ctWwc2pD5t0TcdFbKB0bHXnqtgyWBV0OF0ZXQ7mRgynvAjXVvKehq8L1lHO51VCtzZBRwDfDfnFJFyciMrkXMaQemj1OTxMW8RNxbjX5NJpalQ6Q0bVKArTDMDjafxZ2W+8i5F+rdHOVq6TV58yVOkinVSwUgF8Ilgv+gTe4a2e0Rl9IcsC9dTVLSnEmQZmGWmEvZ5bIWNyFvcrlewANidoPlVUS6qqm1KoV5zCQHAxjDLRM7EjWuwxbmq0OeHhsRyVrZcdeOx6PJ+U/eyh+TT5UluZkYmm2sy8wMhdWzvY9kDuSrTzpgiomy5swUTDFLtgw8/LIGQGYJbZtECDykoplHTUtVSVMzmJctejgC40lhCQedBI12uOyK+hNO0lLWifIp6hZJp2llDgZ+caajYulMthwqBr17NsPMrWpCwp5Wsuv2/s3FC9VL+VzKx0nSOlzaS0DuFu10YIguMOEZ323MZ77lenKh560kxw0mXTHAuFQRzbykXpAXPRYjPXAjkpykl0lRVzGlTHSoYMBLCEgh5rdIM4GqZsJ1RT5IaZSjqzOZJjoZTywFC47s8tgSGYDUhvnrIhZ9VqWvDvJJOOulf8C8ypqK+uFFNYPKWomMQEVcMuUzggkC5BU4OtxGlrp/3wlV9MF6UiYOayIvhQWNzrvMSatx+iR1xkOTvKWVTzqudzUxpk0vzRsmFFZmcBiXuLsVuAD6A1xLoPl5Uyp2KpLTpRVgVSWiuGywsPRvqtYnUeEJSXF7jxMHEu4R0VV992T8gKq1DpIA+ihcf7pLAeKRkgYLLpOmx1hEupX5QCZWFzLVSVY2nIkwK6h3NgQ+V8syCJAiJvRI68CLTlKt3/AEdBh6tEYEdEZnSTgw4GIgYesBJIIkUxEsPEITJQYeDEYjoMAmTqYerRADEimAlk6tD1aK6mJFMMloN6Ub5ml/cf+cwPDxd0sfmaX9x/5zA5TDluYw+n5fdk2KFEd4USXRk4M6I/Ma7ro/tngMIM6I/Ma7ro/tnio79Tpxfp+V3QLoAGnyJbC6zJ0qW2zou6q2Y1ZExrNLcnFIZEkmTNNQZUlWnc4J6C5MyxzQBVLngDrjHI7JMlzVAJlzJcwA6iZbhgDwyiYVrpWfLZaosznHmEEXUmYWxKdpFnYa75xUXGtTDGjiudwei/Ib0JoINNllik6RMSdheU74ccpScJJCkG+Y2ERFV6IUpLmKySpYpKadOmOzYQ87EBawZrsRkALZHVEFPyhmSzLEmRLlS5Ym2lBnYF5q4WdnY3NhkBsz17IRpuYUEp5KTZRp5Eh5ZZ0xCnLNLfGhxK12OrIxfooyX+Rmv9/wBWKpoWk1UqRNAOKbKU4TdWSY6jErZGxDa8oPaX5PlpxkSadJXTcJMaqx41RXYgyxcyyQt7kZWsSLxnNKaSmTZ6VDBcSPLZUFwgEsqVQZ3t0fExJI0m6VrVqy0xuZhZTfD84CDnryvErKXNY1prl8WX6TkzNmDEjSnDFwhRmdZpRbvhcLhA1rdyt2BHGK0zQsxZUqYWS80SjLS7B354gIFLKFY55qGJUZm0RaG03NkSUkc2riXjMpjMdAvOZtjRGCzRfMYtRh0jlBOSnWTLly0KmUcWJ2UmTMExGEotgRyyqWYDPhsdQFm8RexYPJ+ZjwCZIa3OY2WYcMrmfynOXUMtjlcAiKekdHtKCNiR0mLjR0JKut7H0gCCDrBGUTPp9xM51KWnXHzonKAzGcJ5vMDzCcQXaFBsDv1RDpCvMxUQIsuXLXBLlqWYKCcTEsxJZidZO4dqko1oaYUsZy9S0KsdEchRmdQ4Q4QxTHbwCHQ9DEd4ckBJKDDgYjEOBgEShoeGiEQ8GEJkoaHqYiBhwMAicGHgxCoO6JAp3QzNtLiGtLH5ik/cmfzmBqmCOlh8xS/uTPtDA5bb4ctznhOKjvxfcdeFHO2OxJfmR5mWgzoj8xruuj+2eA0GNEfmNd10f20yKjv1OvF+n5XdAi8KOQoRodvCiSlkNMdURSzMbKqi5J87dkbnQ/3OWIDVE3D/AKJYBPa7ZX6geuKjFy2McXHw8L6mYKO3j16RyEol1y2Y72d/YpA8Ir6Q+5/SMPm8co7Crlh2hycuoiL8qRzL/wBDCutf35PKoUHuUHJKopjcgOmx1yHUyk9E944wMlaOc+qOsn3Axm01udSx8Nq1JFKFBQaHO1wOpS0TJoZdrseoW9t4QnjwXECx28HPvZKHrG2/L2CInky1AOAZ8SfA9Yh0Q/FQ/kEXhYos1EzNgAAvDI+zP+wiOmkAAFv8Xh5TJ+M5RGBTqtEsuWx1CFNn5m2Xnfs89skqdqyAt1HXBlIfi5cEiWXRsdeXXEq0OrpZavOuJJbG3m3uiRF1Xy89ZhUJ48uZxaRPWPnflEi0yAeieu8dQbM798PK2Oo+eyEQ8Sb4jVlqNgPnjDw5Gzxt7IaQLWsfPYIaq8PCAltvccX4C+/d3wmfZcdUcVDfyPZDZqebQEBjSxHM0l7WwP8AzmBgYZW8+2Lem/yFJlfoTPtDAxZnVDktSY7FnCd/nujsV8f+oeMKEUARJOvz4Qb0RTn5DW3IzNJ2WnP8YokC2Xsz7f8AEGdEfmVZkb3pdf8AEeHHfqdOJjya+V3M5zAv6WW+1/fFqXSJmSSR3eGuEzkZlDxIMFOR0rnq2RLsMAYzGHCUCy7Bfp4O8w1G9CZ+Imk22b7kRydSmlhyvzzgFycyoOYQbrbd56hBqbXylYq0xAVF2BYDDlfpbss89kWiY86bldTogYHG7szMFzwGYxdgTYk4b21ZhYXiseeAo5It26+y5nBCE8eTerZ6PCgJScopLyUndMB1ZwCrYsKC7Na2Q1WOollGsiHTOUMkWHSLFcYUC7FcWHIbTcMQBe4UkXjrzIhYM3sgrNlhgVIBBFiDmCDrBEeZcrNF/Jp1gCUe7ITc23p2XHYRGyk8pJbOqBWszsuLWAFbAGb1QXsovnnwNmcvqbHSl9sshuw9FvBr9kTOpK1wNIqeFJKSqzz6TP3rceeESpNUjUR3nxiur8b78798JpwG32/HOOc6R1Ub3AY3PZFCZKewvaw2287obV6Rscjftz7LRJS09TM/J080jYcDKv8AybKGkyW0RhAt2YW45n/EGtCcm5lUomFualnUxHScb1XdxJ6rxd5Ocjp0yZzlSuBFzCYgS5/1YSQF4bY2k+imAdEr1Zjs1Q0iHNbWB6DkJRi2PnJjb2mEeCWitpP7n8vXTTCh9RziXsa2Idt4vvVTEaxuufWP7w8aYbUe/fF2q2IySvRmI0loqdT/AJaWVHrqMSn/AHjIdRsYikTV82z8I9JodJM+RXEDkcsu2AmneRSzGx07CST6S4SUvvUD0eoZdW1OF7DU6dSMq80AXyi3ovR1TPBaXLuvrE4VPUWOfZHJ3IKtJHzknDfM4nxAbSFKC54X7Y9E0dK5qWsvOyIqi52KAPdCUOY5YmnpPN66ROkkCbLdAcgTYqTuDKSCeF4jkTQdnfqjZcuKlWpJuLIWBB/1Blw95sOox53SqWGRtxH94iaSLg21qGVcG+XdEE0A9fERW6QG/wA8IgZvOqJLDmnZf4vS/uTNn+uM+RBblBOtT0fFJnH9YYDrOuLee+Le5mqokxnyBChnOdfeIUAzssWGan2+/KDWh1tR1mW2n3/tG3wImVeWeH2+Bgtoecpo6uxFgabxmNs2aoiO/Xsaz26dwfiJ1L577QT+56oTSSXAGKTNA4nEjexTAsTAdQ7f7xwV5kTpNSLnmnBYazgYYZgy24Se+Kg6kicVXFno03TkyXPeXNRQq4DdCSSJnOYT0ioFhKN9esAXjOV3J+jnTZk9jOlIqtOmJYAMAzB8LC5W5XMA36QtbKNXUaUosd3ZAXRCGcWV0IJUq7DCw6bajtMIaboZQOGbJz2S7MSSfVQEk3O7bHQ43u0c8PGww7cHTqnT6gGnqmdZUudS3dClhhZFWU1iLKBqUpYqRnzStbMWtUUyaxULTJLLdI4pDWJs74y17KbsuRuxLttDBb71tTUG0lDTy9s2avzh/hyjq/ebfqihPkVVPOLSWM5GSx56c2ThrlivVYDDYWvlBlfMiXjk16YafPYmtXXLBQpOBjlLCHKWWUknEGvjUsbgKgIBa17nK6vRaWdc/oEdrdEeJEDqesrnYB5dPgvmyvMFhtIxKcR4eyCBp1OsBzcHpC4yzBA1DOBtJPUSxHi06qv4o870doaoqLFEKSz+nM6Kn90Wu/YO2NVonkdIl2aaTNbc3Ql3/cGZ/wBxPVGgCHWSffElja2zuHbGNGzk2KlkS0HzaInBFC8NgiwNcMVREklb8IozZJLiUCGFgNWURTJxGfsMVsRTZHpOiV1NxnruNeXnxgNLowWsdQ2wWeuAOcB6nSPSMQ2jaClVBSmdEIGr2QRWoEYSfpEjMdnnvieRpA2uTFxkKeGzZTZwtrzgdpeqVJYdsgDe99QANz7e20DpE9r67xT5bPLCSVmTBLDFsOJgoZgBlc5bdsOb0FCCzJMoU2kBUKwnS1aWxsEJNxncG4zVuI1QG5SaHSTLWdIdihbCUexKmxOTDWMtuerMwQlBMJKvLwesHWw7QbQL5R6Rl/J+aWarzOcVrIcVgA2K7C4GsZXvGF2dEqTtFCmn4hmAD7eowmnDYQSNn+Ipo5w4sRv3wx/WK342hUDbNDyhcGno7gehM+0MA2I2AwT5REfJqHZ83M+1MB5cwbbGLaMoj78fbHIXPL5P9oUIrQiMwWyz7vjBzQTfiVblbOlOz9rM+EZwsdhHnbaDmhJn4jXZ5g0f2ziBIuT06dyjKmMNYGuLLuSCMIII3i2ezOBwqOJ9h74dzu25PWfhCoqzWciOU4pQKWqzkE/NzD0hLJzwPl6HHZns9H02mWXhDoEwkXDLaxB1EEaxHgrTQRY5jib+2H6N0pPpr/Jp7y11lCQ8s7T0CCATv18Y2hOtGcuJgJu0e26RrcMU+bvm+Z3bB17z4RmeQ+kaqoQ1E/m8NysrApUmxszm7EWByFtoPCNI03KwhylyIjDmSY9kJPSvsiJUvthTHjOjUsvP3ADxMRibc2HjFJ3v51RPKNuJ37DANqkXUcavPVE8tydhEDmZr21HhaGfKZiG4sd4Ozsh3ROW9gvgJ1HsiGpbCM7RVeryxi4Fr3GefvGUTApMQFXvlv8A7ZQWnsTla3Amk3IBmHoquq+snhwjLVVazMNl/CCPKWuuMKCyrkCTcm1xf2WgRT01ze/Zstx4xilZ1xkorUu0qljnBqRJWw4RTopYG6CNKo1RrHRGM55i5o+QDnGK+7HVLMmU8lTdpazHcZZc5gCC522RjbcRvj0TR8kDLYY8h5WUMyXWzhNJZmYuG1Ykb0CN1gAvDCRsir0M4q5GfSl6vb7ItSJRESMB5N9WvKGYx5MTZtSRNgNtfbbVHVR9+XZEQtuhXF9USPQ0HKE/itDt+bmav4pgKM8yPCDHKG3yWh/hzbZ/+qYChRllb3xUtzOOxPzQ/wBMKIMt8KJ1GVyL+TBvQy/iFflto9/7aZsgWGQdXEn4wd0My/Ia7LbSdX5V7QJlyWnTuZ0Jw8BEiSzsHbEvPLwvwsO/fEizk6+GXtgtjpEas1uHXfztiGtmkA31dtvbFxKmwJIz4bN1ohppL1E+XIUEl3AN7jojNyTuCgnsgQpPQ9V0XS8zIlSh+hLUHrIux7SSYes65tFqtGZtqPs2QNpLc5br98Xx0Mo7al9msIiaZeIKuYQeF++KdVPZQSAxtsFgdey+RhN0Uo2XXZdYy4bf7QnKgZMbHUbnI7j52wJM2Ybgg2ttOrhbvieUFt0ipNgLXJBtqz2RnmsuqHzpqHIswNstYN+2B+kq9pUsnGHZjglg5YmbJdXXFPlPphFsg1jF6OWdstW2+2KfJSneomGrm6luspNgyIaZ16xffc7BCq3RpH0rM9jR6JLK8pGbEJiuuZ14bZgDfii9QU7Iry75C5J3A3y7rRHLTCb+qnROy7NY9ZthiLTFcVTCDm+vqECilqTiTcqAWlpmI2GQvsiSmGUVHe5vFmU4yhRlrqTNaBKWbXi7RPnAuW+zfF+ly642TTMGjT6MYE24RhPuvaNmY0qlF5aoJb21r02ZWI9U4rX3jiI12jZljBHnFY2yN7hhruALEEboptUJXdo8FWYTt89kdUE6h515RqfujcllpCJ8kESHazLslsdVj6hztuOW0RlZb5bfA3iGjeMsysdMm8D5y+ER86dgMNmPnqPfDbtut51wIGaPlCx+SUP8KZw/WmAgmN5EGOUTH5LQfwpv2pgDjPVDluRHYnxneYURXPCOQiiLHfb7YP6GP4hX53zo9/7aZGeUxodCN+IV+Vs6P7aZAN7dO4GU32eAhweGKeHVn5tHWPZ2whnZs7LV4xqPua035WotmLSl1i2QZ/ancYyE5Da/943P3OX/ABNxunPf/hLtEYrqDoN5I16zCZaknYfAkeHvinLvi8+d0RSasFSuoi/cdXcSe+FPqAJqoP0rkWzh4M1KKFODTZfqrBQ20n3QEn1wxOAhNib3OYtug5Vi69RB90ZTSzkO2vETqGogQ5jwtdBTqonNph3jCLEA6wTqhujnKsWE0lbE2IwsDbbsPZEMmqYjC4UgbhfI374r0s4NMEvWpJvnbIAswG7IGIS4m1bo5M5PzKpOeExUNybMpsyZWN75N0WOrMHZt0miJGHAmGy2suWwZWJOV/bBGnplcHIFXWxBGoWsBxAv2CE1G0skA3LcCQTbgMusRolSsylK3lKWlKgJ0SfSY8LKoHjmPGMzpDSQdzh1DyB17e2CvKPQVbOJeXLXCBhUGYoJAuSxvlmeN7WjPTuS1eiYjIxZ54HR2PEBTmPGMZKTNsNYfFosS5tyADEtMXJNztI6t23daMdU6XwEoQwYGxWxUg7iDaxi/wAmaqbPLpLsrBSwLOASVIGGxG0HjqvsjNxklmew8V4cVua9Ga+R2Q/R1UxaZ0lIUhQbWu1rvtzAuo6wYysnSNVzhWZLKBbE3BYtc2UJmFa+fSzAsTnqgxo2TOKidTpfXjlFiS/SJJU3ybXkNd9tgIiU5RdI5Z1arVGj0fpKY2OUijngWC4r4bWujkdRBI4bLxo+TOjXlLebMaa51sQB3BQAIxehdItMqjPXDLIEtRKmMJbuAtpirisCwJ222dUegza5EALnADtb0b+qW1A9sLCnbed7bGSxXUora/wO0pSLPkTJLanVkvuJGTDiDY9keCS2YXDA3FwRa+YyPiPCPoGnthuDfiDePBNPoVq6ldgnTR2c43ujti7RWG6borzZxsNd+4cdURl23GEGzvHOcHC/CKNWaHlHc0lB/Cm3/wDtMACrebxoOUf5ro/V+TmfanVAIDzfKHJ6kxWgzAfIhRJY7/EfGFE2VRArqOvr+EH9CMDQV+W2i26/npnGMzlt+MaTQKD7319iNdF1ZTpkMT26dwVLI3Dtz9sWpQXYFv3eyKCLbXbxziyi5f5+JiGaokqjcZ28Mu/PbBf7ntbYzZB/StMTZmOi/DVg8YCYL2467nLz3xGuOXMWbLNmU3BuSNViLbbi47YTScXEmSe5vKm6tcRJomYOfQNmDcLfY1shw1auMUtG6RSol4lyYekp1qfeMjY/3ERzZRU3DG/wjh1w5G0Wpxo19U519fn2Rm9NSMRya2e6/jFmfp1CgxkKwGeLUba7GAFXyjkAktNTWbhWBPYFzMd2ZTWhjCDhuPqZOBTnkB5tA/kxKb5RMa+ayzq3sQBr4BokblBTThYTVXZZuh/Nbwi3oJkLzMLrdwpBBBvgJyGeeRPdFPkawfpbsP6OrgFUEnIDIcDnBIaXlYQMTHdcjIDiBcQBkSQu3LLWD2XiwKrCLIoHZbrMC2MZR10DUrSuuwNjs2auMSS6+1rZL6u0dkZuq0wspSzuqjibQFflSkxsMoTJh24EZh4C5hSlS0EoviFfug6PFUsu1ucVznbpYbEML7r4T2RnKPkwZXzzNdUzYW4e7X2RptH1r4QBSVLHe0sSx2l2B8IsVmkSifOScAa64S6szXU5YZd8st+V44Z4kmmnognKGRx/JnaGvWQRKElgudpbehMW9xMRjmWORuL7stcavkrUy1R2wPLUzCQswYWUtYlNxzuRwbVEejnEyVzfOSX24SQ5BJuUwtmbHUbDXwinycqZJvKqAEbHMwMfRuJjApuRhbLVcdUZW3qvyYJ7NsK06JWNNeWFDCYAwOT3RFXpZYkzFuiRfDe8X+TWkASaWYVuGcKCwYOoPoC3q7jmRY77Z/TugJgmGoksZUwLkQ3Sb94KDcWyte/shaHmNUmX8okKGTEpmy2VdWVmW4ZGBCsCBbLvqOjtb8Ryi0qr7P8A2aLSeipEjHPR3kBQWbAxwWGZ6HuGXCPG6uoMybMmt6Ux2c313ZidnXGh5b8o3mg0iTOdlKwvNIAZ8OpTb0gDY4rZkd+ZTLIk+33x34UFFZkqb4Dw4Ja1RxzERMSu99RiFmjZFs03KP8ANNH/AMKb9qYBhDfUe2wPdBzlFOAo9H8ZU37UwA+Ujv8AO6CV2EKokwHd4Qoi+UjcO8fCOwtS9BrSwN3jB7Qo/ENIWG2i4frpkDua6uywg3oeUfkNfxNH4TnhKX9hKOnTuZN3IOYz4xdp6kjMju+G3vjppuvz2xBOkBcyPj364NGFSjqXXYst1CngSR2xVq1mECwsNtur/MRysvRvfdcHwN4sLUtexw8b3EKq2Hd7kNDPmSyHU2YZG+dxtDZ5jKNRo7TqTbKwwOdh1H90+7XAVZwuCFuNXDtyiCoa4uFW2/8AtETgp7oEsuzNVWSlcWI74zWkdDXN7A9fm8RJpGbL2hl3G+XUdYi7Tablt6alT1Yh3j4Rh5U4axNFiLaQGfRYH6B7M4hNGqkMLowIIIupBGYIOWca2XMVx0SrdRB/xET04bLZth+bJblehgiZpmrYWE89iy/csS0K183JZr2O04PheNHo/R9PkSit+8A0GqenpB+olf8ABYPOfATymd0VyExMHqJhduJv4kxr6TR9NJWwMpQN5Ud8RYaIfqJXWZan2xepZshc1lyl6kUewRm25bshuiCbUSSpImAgXJwFnyGvJIp6B0fMmTflDSnOyUH6AUH9I4s7ngIPffiWo1geeEQtp1dhgUI8zKVvgXJujHc3dkXgoBI/3sCe4CA8rk5LLVMqYGCMyOrq1iSy9IHabMuLP1oqaR5aSpdwZgJ3L0z3Le3baMxpXl5Me4lIV/1Pr7FGQ7SeqLWEpPRdSXfE1brKo5YdqqZLUZGWxDq9vUUjECdymMRyk5StPxS5C81Kb0j+smDcxGpeGd9uWUBJ89prc5Mdnc7Wz7BbUOAh2IWy8QI3hgxhrWo4xpUiNJe4+eyLNNRTJnore1gTcAAnVcsdtiANsRh+J7AfdBHR6TJzLJGJwoYqi3sAzBmGeZF7HPbaNHKtWaRhbSTKM+gK/rJR9L0ZgJyliZe2u1jYb2BEVKykeWxVwVbPaCOixVrMMjZgRlfMHdGn0roWYioplXaaG5sJZmYobMAF2jLLceu1TSeg58qUMeag4SgLkoyqcIcEAi3OEjZ0zb0jcc1HfQeJg06i0/sD9O18uZT0UpScUmXNSZcbWmYlsdRFoDrffFuZJ3Ant+MRmUdgt2a40zWYZGiLEd8KJubbyGjsFoKZeU9nefbBzQ7n5BXm+2j+2eM7KD7QB2n3we0SL6Pr8xrott7fPTIzS1/eRo3p07gRp/m0NSfs1xyWh3E8REjKb2CMeIFhBoVbOLOG493vEJp/Du/vFlaY2vYeeqIjLO0e+FoDsgVtZwkcfNofLc7MXXkePXD2UebxySuf94diSHXOq+XUR7odLpszqPblExRNZt532EdDS75i1+odvkRNlVzIRSbhbqjo5xfRdu+/gYsSObNgCD/u90WhbWLeMJvmPJYO+Wzl1kHrA/8AzEn32nDYh7G9zRcIGRNteV/8wx5Qzz89UKo8hZHzKzaVm7ETtxfGHrpaftCDqBPtYx2ZLAv7lLd8cR12W2bD7LiFljyDK+ZE1dPJzc24BR4gXiOaMXps7fvMW8IshuA7QfdEnOi2Q8+MVotkGUrJRpb0DYcPZnDjLlj9Fuq3wiTGM7ju2+GcVpr3PongMvhBqx6I64l561Ow7e5hEfOSzlncaze/UdQteOhh6p89kVp5AN7NnsAJikhM7MOoAqe8eN7R6HQaCZHpwoVGltgm9ILiLpkDhuZnTIOWoXNxrjzaYMtRHWCPCCx5TuzSmmgTObKl8RvzmDDbGWvfoqFN9eswpQzUJPXkesVRaXXSZ01lMhadpaLLRnKzWKM7WVTZSiqoz7M4GcsNKSizuzMJZl4GS2CZMN79G5DDCHzBGdzrtHnuldPS3mPNAwYrdAMThTCFC4mtlYdW4WsIC1NUZjYsV9wvfyeMPEjKay3p+dBqEYVK7dDjJBbIkDYTr7Y6ZfExAs0779scMxt5i6ZFosZworY23nuhQsoZg0ZaWsSD2L4wU0JpGRJlzpbyueSbzVxj5qxlMzLmim+bfV4wEAI2j/ja0OCnee6FsD1NAukKDZQNr+lTdv8Ash8vSFD9BYf9VM/pjO/7vD2wstV2PdDFX7bNH8voPoLf91MPfdYb8voSbfIG15fjU33JGeDHcfD4Rw32Xz6vcIP3gGn8/kPPPoiQfva5/wCrnezBCSbRZW0c+f8A7yb71gAMXHvtfujoxce/+8GoUv1s0T19HkDo/Z9Lme5IYK2h+gN1Grm/0QBvwHbcxIrDf3D4QrYUv1sOSdK0i5Lo62f0t/8Ax3h7afpQB/8Az+6qe2vLPm4z9lA1XPG9okuP0iOzh1Qh1/L6sMzNL0hOdA3/AHk1dXVLh8vS9LsoD/3kw7f3LwHR12C/YTC58W9IDgBn2ww05vqHTpalGuhPbVzL5/8Axxx9IUZGdCRutVTPckBZc1bk67ar7zDxVrsI7gfYITvghpLi/wAsJ/fCj20Lm/8A7qYfaohz6WpBqoWtxqpnuQwHeoU3BmKO/wBmGIpouMnBG/CR4gwrfHsOlw7sOppWj2UNv+rm/wDjhffik1fe8dlU/f8Ak+uMxLmODbEezP8AxHDMJ/S7xFUTf36mnOkaNgQdHsBwqZmziEyiWVpGiGXyB8t9RMPiVz7YyqzTbWPZHRUnV7zBTC1/PU0dJWqJc6UFIWZisMRCgGXMlhZgCnnbB7g5dJFPCCv34u6tglthcMOcmYlU85LmgIcIKKmHCii+Als2zEYk1OVs+rX4xwT8oatEvK2aWgrytPKkqUVExnJyk0M4nJiRiCJUxA5YNYn8meAVXpBJly636E1GInBSUnyxLa5aUbzLywxfUSx6PSFsw1Tx9vxiKbP4+2KTYmldhPlRpET8Kkegzm/Oc4BiSUOblDCvNyhzdwmdizZxn2QDV7/jFh5h7OuISYZNpbEWHj5/5QokvCgFZbXb52RwfH3woUSzVbkkvUPO6HCFCgATxCus9YjsKAY6VqhPChQEkU3UIik+kYUKAXEsHZE0nV3+yFCgLLNV6HbFGXq7vfChQImW5IPRPZ7DFeZ+j52CFChomRLV/H+aIqb016j7DChQ3sKPAlf0xDUjsKIRoxD3xH+kOyFCholjtvnjFeZChQySaI1198KFDGcbVEa6x1/GOwoESxkKFCgA/9k=');
        }
        .product2 {
            background-image: url('data:image/jpeg;base64,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');
        }
        .product3 {
            background-image: url('https://static01.eu/catalogosofertas.es/images/uploads/070321/oferta-20-25-dto.-incluido-en-el-precio-escoba-multiusos-aro-69131.jpg');
        }
        .product4 {
            background-image: url('https://www.perfumesalternativos.com/wp-content/uploads/2021/01/black-secret-300x300.png');
        }
        .whatsapp {
            position: fixed;
            right:25px; /*Margen derecho*/
            bottom:20px; /*Margen abajo*/
            z-index:999;
        }
        .whatsapp img {
            width:60px; /*Alto del icono*/
            height:60px; /*Ancho del icono*/
        }
        .whatsapp:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .facebook {
            position: fixed;
            right:25px; /*Margen derecho*/
            bottom:90px; /*Margen abajo*/
            z-index:999;
        }
        .facebook img {
            width:60px; /*Alto del icono*/
            height:60px; /*Ancho del icono*/
        }
        .facebook:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .telegram {
            position: fixed;
            right:25px; /*Margen derecho*/
            bottom:160px; /*Margen abajo*/
            z-index:999;
        }

        .telegram img {
            width:60px; /*Alto del icono*/
            height:60px; /*Ancho del icono*/
        }
        .telegram:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="min-h-screen bg-white">
                        <!-- body -->
                        <main>

                            <div class="whatsapp">
                                <a href="https://api.whatsapp.com/send?phone=59167384101&text=Hola!%20Quisiera%20saber%20mas%20sobre%20la%20pagina"
                                    target="_blank" title="Contactame por Whatsapp">
                                    <img src="https://www.peengler.com/wp-content/uploads/whatsapp.png" alt="WhatsApp" />
                                </a>
                            </div>

                            <div class="facebook">
                                <a href="https://m.me/joshep.mar.773" target="_blank" title="Contactame por Messenger">
                                    <img src="https://www.peengler.com/wp-content/uploads/messenger.png" alt="Messenger" />
                                </a>
                            </div>

                            <div class="telegram">
                                <a href="https://t.me/JosePro19" target="_blank" title="Contactame por Telegram">
                                    <img src="https://pngimg.com/uploads/telegram/telegram_PNG34.png" alt="Telegram" />
                                </a>
                            </div>

                            <section class="juice3 bg-gray-100 bg-opacity-90 py-10">
                                <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                                    <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                                        <div class="max-w-sm">
                                            <p class="text-3xl md:text-4xl font-semibold uppercase">Oferta de 20%</p>
                                            <p class="mt-8 font-semibold">Alcohol en Gel<br /></p>
                                            <button class="mt-20 bg-white font-semibold px-8 py-2 rounded"></button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12 bg-white">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">Categorias</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">Todas las Categorias</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-yellow-400">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://i.ibb.co/Smq7sZK/2021-11-07-13h26-50.png" alt="" />
                                            <span class="font-semibold">Frutas & Verduras</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://i.ibb.co/PwYJkQs/2021-11-07-13h39-41.png" alt="" />
                                            <span class="font-semibold">Panes</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://i.ibb.co/4PCjhsS/2021-11-07-13h40-02.png" alt="" />
                                            <span class="font-semibold">Carnes</span>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">Productos</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">Todas las Ofertas</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="product m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product2 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product4 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product3 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                    </ul>
                                </div>
                            </section>
                            <!-- footer -->
                            <footer class="mt-16 h-48">
                                <hr>
                                <div class="container mx-auto py-5">
                                    <a href>&copy; 2021 <span class="font-bold">SUPERMARKER</span> By: José Arturo Martínez</a>
                                </div>
                            </footer>



                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
