<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAAkFBMVEX////u7+//LSDt7u7s7e3+/v7/AADw8fH/LiH4+Pj09fX7+/v/IxT9PTb/GQL/Qzv+l5P+tbH/9vb/xcPs9vb8o6H4wr/9aGPz6+r70tH+6+v/KBr4///7hH/9dXX+4uH9Yl3v///9zMr+cmz/VU772dj+TUb9q6n/NSv8u7n+XFb9fnn8i4b+n5r+NDH/Q0IDHn2bAAAb+ElEQVR4nO1d6ZayuBYFkSkgIsaSIYqiiDjV+7/dTSATk1NVfVWr16V/dFc6OWGbkOwzJYpaP5qt1I9jkj+hczW8EX084xxDs64xS4ykLrVcY51LTfADqAxFq/8eM6E60PprtLrFTVgNnRZo7YKxaNIWqvSAMQHIPo2RVb1z4ib7CEGN1QgWI7eGY1mGtwj0vw3GBNHZ8BiU0WG2hZpcIz8fGZzEmJYB7mbgVX8dDAL5JWHD4rqf1xi2aiigXB69xKJTcJkF4K+OTDw7GS4dFu/zEuk9Ywfj4uS6bHAsPwrh3wCj1Q+tEpRLt/7wrZFnrecOgduoQaSOTZj7Ezo4eCGY+Llt4ipc6rjdBNBuQH+3RCgtAK0CAab7HnWBBAbQx3bwi2eXkXjFfREjBz9SjeqxyR/Inq9cPhu9TQEQLqU1Ok0eF9iDBR2hYKiJo+j0ARDml4PHJ8+0yAEwyeOwGmb9AFLg6EqcbfCEtOpRdFelrdi0hqn3NSHPCzUeNunW4COEgsXecNkMM1Y5qr8DzdTZGOIRVTWpYJsWE/p9WYl3vOAmWjWNNT7s5A8y71kTe1wLFTVwC1LDdFo1eC+2VgtRxXtUf3aaiG6VbGm5IzbDNlnMq0hg2gUQ5P5RrHyHRbitPsoGGLUHTKeG2nmzJhhVBkNFiCasBv07XUl7x6SM+6R2wYxVaEY7tviNXOtU2OhfgVEHwAT+ja20I8NYpf1S+8DgdTGc3YyEbbHuLsWD871gxi+BmX8yvjVyjV06JLUfDOZx4ZWva/hru4Ro/I1g4mALn59m6ZJxF7xLHuY6ehUM3hritSFmqbEQXOExGK39ZnK3er4zvF0OzCdHJjcEpZxcgm2nyh0wmsml5reEwXENv/27AypUZ0K1jtCebvX4goc8wXQ2NM2e92gLVZU9Gxb38xwgYNs2IP+Q/2APoP+0CngJrgwQKvZMNxgZOar+tyQFtETYTRG8hijQ45lRfYzVkhRUFRovAkBbhMK+lpExqyaYY45bzEMdd+hMs4A0GZvbaMpkGcV23NvkHp0ZN+lMMN/wZZJoVFEA1UdCFYZl5G5msdJD33Q6hpoQUhfIjM+E4cf5xsHMts0aLxPNILpgjsiwkMHxrnkI2t22hAowGP5uHnQ1rWfAQDPHTE0a5K32FTB6fp3w5Z4vLJ/XFOu7T4LBc/12yRz48sgglPt7MSe+DCYuNlzBwMPDVSd3U4TIfAzGYvT34OcQvAgmmG28ehmhYr4CBunz5Yi/v7csy51AdlxnJnwIxqsnqIUZ1mlRq1pPg8nWR4+xuvot3v5mNIiyFVeUMHWfxcCOi6PBSrzPVa7wJv1gkvOSMma821j70oZj7Q4YTXrVdDUV++XhPEnujYx2Bwzh49t4NZGI1TU2IW4SpJhiWFyRvwT3wXjXuBT2GM/apcgETNVRa2VBBUyhoNoDeVVn8ck797xLPJ+6NZiqhmbXDTAYKsRmQjWzUaPSUiCYMYUKfynGLmJNFCcX67Trneb459HJDKG6EBNKwfgBCn1Maxgcd4GQRoGzmoIB0Adt5wdXdL7Pne0HBaPQJnRUherFGYDerIG3cxRtuDS8duGVlUipKQFApSHR2RP+sTWzLVTlYICKwhOba5hDGCXVzobpTDyR6h/wz2VDDoY2oa/+BDdT4rPhJUxaIvgdfVWIisRgvWHlEStTbTongxlDVE498dssa4I3BCbwuc0zwTOskvoGmFokCGYj6ZdfxahLI1G881wOdzILUbuGBKaCf52wz7nSbEAfwcMFejA/is5H61j5Ahj8PX5MuX3LdTfEgtqrnM03CZsLrnGKgrtgMJz0Iq1Ox0UM+sAE2UYo/8mmZP2+Nc1AbUFlq9WpANAc0jSDYs8WHAtPh1y/C0aFOt43XGZv8k5l2AYDg9y3GHFyk9M15tP7DTDQTAthQfU+fTzDGl9mS21OL59iHzqU6T0wZHiD2dJlm6hnrDNdAqOZIC0+xbB8+ukW8un9Ohgnnk0N/tMdzxnbxYZtANk6YXA841TGfQsA5eSVkHSxl2xI13rTBZhxm9twdvLo/xoZ7vkDgLHotwNGFlqDoSX076BcMwsq3t7OZcBrdJow24uCwgLrn/WPjYnbKgOQKhQMTCgpSUTdiXyLj71xKlJUKUEOyM6c+LnGuowRbVKbFhHbNBEtkKU2CiqraJCtblwaUUFkVYsbMDslDoqLk/ixp5eI1hFg2LhXFly8G3+cDT7XMN/DQhUluky5EGNSxHKTSkviDKDfLCzRmbGJUn8qLKg3PwdAvWdrZtboSmjucyUBs+MFfZMeMPWcteNSwHcnqwjFi4MgTp6ftxmvKoMhf98hmmMUFKeEMyH3koeVlKe9AEEkfmzXWpZOPxj+Zrrgq8Reud6M2KroGucsBF8BA+Yni6+Zxob7eF5waQTlXjhfjsvsPhj8R34W27wrzC+3WQhkLel1MKtE2pzngXjV58HoICw8xqbxIBfD04z2q0d7Njgj1nlyjYHaUJtfBlNwHdszKkr/lrNJheFZGP2M6P7IVAWF60lg8BpGXM9fA6PvmEh3HzdkvOg5gyif0qlmGYtHI4OfbYj3UEbw3EmmoHFXKu332ZFZc4q1i/X6VbU2GO0JMOo2P/WBocqBw3w5XG0y8SK6rI0k7q2s/NG1tsabMGePBEZt1uA+JarG7BgYvIlfYkfp1OBC1U6BLDRa8WlmGVfOAJj7qdfJpQQrA7dJjtF2yJVWNYFN5WzQLxZsGJjKw4s1/Tc8Z8CJryO2ABAwF4nO1KPa78JyCgLGnQYNV1rHydWlM3SqtLhZKMDUS/M81Pu6rQo6/pmqwDTT2Ua2b1neqks0e83xwaICM4nNrhdAMno/SzTpyCQupxjnLOjpth8M+QOGH0tmUqpX+V8DAyowyXTP6Qym31Q5eQwGL2Igukisbn9wf31kvHXEowmI0aXo9T52wZgovnJncmJMrx87vAr8GpiQgnGC+Y4uR0TX2M2eAYNAsXT5BDVWkR0vfxMMGxmsvoSzA7dXurddhh4pZ3q2tKTIi3ms4J2jDUYb9+hRY/xPA4w6Hktg2qpXdzXrEToeawIMXmfThcEZlnfzTUjcPR19bkyVs/gy8Tiru1UzswvGER6t5r+r/3QYGOn/NPxg9SMpZx0R1DtW/3tJwVR/OflKcqt+Fgh1Jde6GdYbJC3EOKdVOQVj+APKmaxH4QLVZGCUtpak9CtnLSdXOxBoXYMJzboGobOS+TWSe+F0RoNofuBmR7w5RbZZBQfZFEwfN6NTtGE4b4KpK3yFNbfA4BqFKxHpFe6nTTTxbNoIfcSYlDp1qasMzPUx0fw3YPCrniUVx8NahtkEE/qSX/zmSwGI98D8ysg4JoQfO658Jsa+DCs4FEzwITlprHMq/+x/EIyqbW1uFiBzbR2ZkIIJSHADHTV3dCqbc+jPTTMigzibhMHGMgw/NQFu4uRihrne4eq03vQxGO0OGK0N5lnlbGg1YzLGeK5duIUzMTDDwQtvIbZVY0qiRh+CcZyOHuVIShEH4whdrKt6KU3PmWn3CnWocob3GSrDETVQMF8nzJLtubtZsRM2z+MqC2BHaAdMYNP/JQVJMi0JP5wBAFMETQp9jhUgxgB0FlbZrgHqP9mmyV5Ijs2EcSGx6WQk2PGyDDCGTrds05SUMxqcKnEzauNt0hlNa9OZu8oZ3Sub3IQTzYDXkCmhaeaLnqCGQ5HqslDepIeb1fPvXxPN/ngzqEarRA43sQzXT52GUBHV9MtgzAdg8LIXSAyHuJ4zHhv718A8GpnKBhCUhkEjPiYfttRt603/Ppiql+BSoTH8gNCwoUjA3wYTPgdGmddgctiIa/62kfkeU5M0MndjNCmYqAmm3aQLprtpSAW6GBmpBmg3AbC1z3SE1k0AXwD0+90yMGCoRv8+I9GZcf1IYY34x5LpjEpr9DRhDAA2a+htoYzOqIM1SIHJwFQF2rhf6M8rZ80azxHNqolsJ4cVmISCGcyf+YsqwI+A+TUVYADM6D8CpvwymL82zX4fTLPG730zPUuz9jtLs9oYmfHTS3NwNz1MkTfN4Xwx0PacDbjjZFvzYLekgDMAVtArlG2ab9CZDje7R2eo0Dvc7EfozF9kzQKMqv4E0fw7YP6MCvBY05TAJP8fmX8GBnL/TE+aVh8YcA8McQ90PGdD4YRfNzU13WCqGZYHYkByD7PYHrJwNcHIYY1cKBuZ+ErSkBrK2WAUIfFtcc/ZUA3qOWNg0EAFXIJAtqLmcfe4ykA7AlLuln0zVR2np4Zt63q5dokZp6Gc0agWh6YLqCxdoLLGAs4ARA2NZinITQZjZ3gNJb0eXJ4W6h4uaZWl0OmWsBfA6UxdYMpCFSxUhSi6TGo/yLcpZ08azjUVxdfTSAo1IUHZ11CScY9oduz1JKScJ8qPjOxfsmYNbrPliPmTRsxf7pKciHdYM0mnZAEBJDrK+Zf6zDbfHKVgRhH9f9zk6ImRaXWrSL8MzQz4VyOjQXThMXgkmDG9esyanHi3hYmqLP/nlbPYt0TSgltUcUQ/NDLtGhCRtA72oRhkKPBeJ+XfUO/xsyPjFJbknT4PxjX/wAKggGgqHP3GIVMwDx5D9MHTj8hEyYD5JBgnO0hxA8ucddNdmpn+RtdIhRSYjaWZvrtYmgfA1BlluO/U5/mwrjvxg/qEGI1k3382TiIAPPCRBDUIMKSAxdA4TioiOlzvUDidnLNOtH5jbxLhJj37mxRu0to0qxp2upiKxKHJKkciHxuh9MxjYRIjKWIH2KJXzs3kbuKrIR3yc4kV/qb9WRrkYbyiFQikvRQINMY/vhSF7yW7DJKEa3H8AdxGa1dEKZ3mYZWQPW6y5rEIBCr3IiDgds7lN/1hoglBtJIOS9osaKqPfLoJDBcbj28X3jkj7v+mCsCJZpCtPeGu3ZXVGnYnGeg7wTgRd07iX/3zmrLtpJlAt039vcuTcqxrboJeFcCJLiI5wduwLJF/A0Z2GxvuKhvKBtTwAPo38Zr7RQwroRIYzcSsThI3uead8LofBBOUu5HIwFmRJNLhA0FgkBGXLN1DreWMEDbxzZADB4qNiLZ1SZZI9wyNnwKjpyu+TLnGfhY3hHYOcyGpbt1Pm38zEGU7KZhxU8ag70AQsZr1g9He85wF/qc4NCzxU10ZACN1q8dyCglZdNk0Q+lOCmZ0ZyFWQLo/uwAzaI2rCmzZCDgYPs+MgF7x8cmDx0jGdaC3hJrtgkoGHs4Li4/DbPpW1GC8+ZXnolsG5i42NOX3EAdPCQZQw6TbucYNp52wxirbXW2lv5O/OQNIjizSigxLpgt9Rth8OYvgMohUE2Y8NoMQtuoHSY6uID2bzKm0OelN2yn0XySaLTrDYkTw67gL0u8LJzU4ykww0qTxrxHJRUdg8E1/RgVgfXvuqo7wf+0MjcC3uK4gPSSYkdCDl8B8XQWgfVunjMl48aiWaGm5SRuKta723Pbs/qGRMcPozGN33GRf2CzJ/eVzZ/RyY0lo8M6SbD4QbGWH/RwY04yuUzY9sGLvp1CVNM3XwOC5dpXQuN5pYdeZbj8/zTSSm1MceOaEd1tlNrzjOes9EKQBJi2OHIz76ac80PlFMK00XPVxxLkKzWLneey0Q+Nc4i/1K0dPxrOTWAM8wuq63fYcPUnB3Ldo2vZ9i6ZDiD7P3ybcZUh9G+qlYfMMyvVRWs+MDN03pA4pZ6/bmscmwAxeiqC+8qTnxyn0SrdbCD5WN0NeywjR7Nqau+bpb1DOtuFCyrg2VhHmTbxfKvSFY/RQfJlys0Ct4zxwaXwfa4YAL6Ii6fmUkUPivgKm+ORUyDPq1LQHzqZvAwPTs2SKmxR1OsL7YOZLVzo+OXvK2fRNYCD0PdlIGUOz91WfBIPinSGZb2f6cw7a7wGjlK5kpDzliqP1v+pjMJVyRiL+6yfBmilZRX54ZIQu5sTS2aauRc5AGXzVh8cbqSAoJeOau4wqJiQ8Z6p2Z2SeV86wDtQJa9QxFF+kvWE6i3UWR1K9nAH1jdVQWwqemrFfhuSU7GcINiI0gCy0/aZOVzljMJ9gAKoJwpn4Hb3Jmngk5P29c0402xv4DtRgAHq+knJK9gvGM1qBQAMMoH1a42spJyD+WDPdj5xeMQew2WTwWPDew9r0tBDn6Bg3erTcCyFaXyGaTnR2RebEqQi+cPo8VizjGU+iJSeRl4j97v8CTHqVcnM+yWlBX7gXANrZmWcwYAVfnPP1TWDUYTCHIKjswnQrsC6R09fkSTAmBJk4Rgp/LNccml3P2cPguXfBzNbMd4fJxnIe9Dd5EgzEgyzsrdYlx9/eO5GA702zkXWTUqRnMW/yBhgNgmLPvejE+E9Y3VsxmvfADEecM6MPOXvGTwEabDIYgchrQJSdLGGk3M8DU+2ENTbBDEacDytnA3oUBTOiw7LMbefOOVeDahQrQeE5YVAsw7iEsC+YBHHzbF8nd5Wzasju2prp1mJ8Vj+VsDW3SVLHktygM5qGyIUwbFQ8Yx2jvmQgZYibdd70LW5WL6AWy/rsegGeIpowmAkTrOsdcgTHbwTPfZVoVuOy50cAvgNGM0G0lAjqdObApoyXYzRfBqPPODs/LuL3R8Yx04snvOhTP9i2ZbwcCfgyGCWdMgZDEibr85XeAJMWE4+HzBAa9lwk4DeD0aMlt2a73m4evwOmOrecfffHHTkt7hsCTnvB3IsvxE+8kNyjx9Vc7wlr5DYf1i8j6ZU/JVt5Bjv4zljWe+6g3agJRjY12Y9NTZLK00ztMusC4rj2eQCM6038yIHNJrJyVhcI5Yy0lrzoBz9FerNGWwbRCVvKWVto+00FA2inxXUL8G/rj5gNFvMZP0TNlG6e0ma2ZaDK7c3thH4E4FAvUoHYNPuEdlLLe4PnWvqbrDZWh87SYArXW86c/ibta46CcpOIM1MJQR1SGxtHTzbpTFt9dQZtzQ9Ys8oN9uTIbXH46e5Df0w09Wx9E3bCQ/WxPHRpfBNrvg9G0eOFKx0zskof3XMWX6RgxtG1Xtb/FZg+FUDuVwH50vAEnEWAqO+4DwxaMChkWHYsRuQ5MM/lnH1hZLBUE2Z7OSJxhlA/GKREwk6Id9sUtWo8MzI/DIbYy6/Cg+Iap5QoVm3bC0SSnTDxjEKHz7sBvwamGdTQPfKxcS+AZiJyNxLTSDxjR0zmTQ3fjC/SGT4WXsi1XlPTcLe9Qdod/H1ghnQfZ0AXwr87929hBSspYrNRQxxcRiKXdxGSIyKHhDYVO74ANA9SHlT95PPNqkfiJlQrFR6MVg2EShF17ZJDrU2zlkI2pDN31/JDe4VQ4TljQp1Wt02iiQvUh03GzxJNRWmcPk8LYCAuJBl5mH/SaziciNGwyk644CrQixdQ/RBr7gWDFUSY+sJc5B1XmKdAGPmynZCYkNpC/yQY/JGa2UUyFe+veXWJJYVnjFZZCO/cfPdTKsB7YKrzOc8eP9ff2+xcfpq6sStDaGqv+DS/wQZwdd4Hg181nksniAs7IaZhJllQ3waTvWMDcPcZpPFtnSoPwVQF5ARx+sWzj8VapLbJ4L4Dpk6MexkMyf6Kkdq7NI8Hl+ZGgR5fOGGr1J116nSbvLA0K8riVn96zy/N/FRpd4GUKsWMwmT5YvykQXE8c2+BCSv+SQnOYU6OUpRyzuqHZZSJi20HaijKjIWYspyzThOzJVRXNuIAxOO8Tzl56p6zugWaH+qoxmNROdPevE2LPLnIrTE26d1uJToTutIV2cu8q5w8A4bWAEr2WUXPfvGeMyUm90CyKWPN7/+GEhhgCsI4Igdv0SMf3wDzwrET9+85k2/otFjW0lP3NpswEoSR3MZV+Ul+C4yKgkjcbeMelx/OcLddMMSxWC65Oojn2jwEpvY7YIAZSTcoE+8vevipNsGQ65CKk2BY1iWz4b17zp4A06zxJBgT5eTUVuaunVxSZHYuCrgHpjbXQBOTQ+EqnV5TyDXcoZusXzlI94krKDVMWmcbweqOlw9AMprk4IpHQQ1Mw3EAP4aPbHmbItAfRRF2FSv0MaE5Z3fdcFKBqIHCciel2e3KoCXkCeWM7TegOtBdXJGdrEsIifLLchAUmyZK4+2cNaEFNB1Pad8LwGsAlrBns+vsFF2ugVd1lF+k29OnRAWiQjXWrd7fLRcqbtQG5DqmeCZdkT1Z5Q6e64+J5usnNbQchZpJzLciReV4zVXJP0W/yCdYsyJXIVdkj8SVM+Rqq2eI5lfAkD+gPduP5BQVzB/ML4PBNUC+E6dVJ4eZA38YjAa3+WYk3fxYAlMO0Xv9enA5JM8RYWxE18p5jR8Bo0m35FXBjHa9Z3/HyFR4gwU/fxuL93m/PwAGbRechlVhnkht9fJVMPivtRTFahS6BKYn5+x9MHomzQKX0OMn79LoD2tkyV+cX1bBggrKT4l0RnceyL8Ia6LKTfTeK1vaNVT2ZnUCt7gSynXx96mIGma7iam0CzpC2aYp+aOowdJZHEQSnHfJA+HTajXh5kkg7gUwB2pIBUG6kC7r+sTcpV2jV8YdoUzl60sgi/2DvPaz6+nfOUm7MmvIpnUTxoW4AM67rXJUTeP2NUdau6C3W/ZQML3maD1aHUXi6LKMqdQOft7kaaIZfqwF28DcxQb1LbEvXkDVFNoDRq4SlMuEs+nRuYqW+wYVwIkulkhlPs1ivecCqm8BozaqVAlLbCG4XfLvAJNe+aWQmIZVl0K+eTXYSyNDhORXSwo69tO+02xeARMXm4Tl9BtYdwpkGT87MooC1WgtrlX1iPb3GEyzhgwmW/MIQBK3EjRlfAuY7hrBX4TkLMoXOFq7rEoybDfRGqc1NsHUq5mmVldm8934VsSOXEN9ZzXrU87a+0xrwQ9njduAqz3h3j7TFEprIPMq0pQxT4rtR9329XJnn+GgOoFAVCllnjNpt068Y+H0BfFApmkyoXIgEF7pP/kxM5hVpHKNTrfdAuVRDU74hhmP8PpFe+kqm0NfrNhdbhZLF3Z7xocu1xjwAtSvSqu8owIMuzTgdsZv3CZxojkET4LBNCqWr1I/XlCzxhtgnmfNvWA0FYXnicym40r3eAiG3P79Kbuec9Tq9jfAaOTIm5usFca1ZeEeGBOEmWyk3JQAjlvd/vtpVhNBUC6P/BJobzkPpevg+8BAM7pIdoVTEZNM4T8wMqQCMX9uRJbpzc/4Ot8DxkT5lfMhQiByQPao3gNB5G4f3tp4TzmTTFxc5WExis0axDyVXj8lG9c1rW1cHbuZDmBYuZ5rfy1JUQG1LU7tCG11y1UvZeg91HYT/GLCLNjavQY3K1LDzM6S9XEzs1HfpolQyS7GIdcjLz9C5NjDQh93+6BJx+h7P6yRPMTGa4L4YydHBM4gHLdu1IYwukzFXeIH/LHwVJ9HKfQ9luRnwhrpdBsmmgNeAMJwPCnXfJUis8Ga5VSfkZdUt3+/cFLDD6kA/WDw46QX+dg030YCDHRmhxGHYuwiYlD+BTDPjUyVyefkcpLCaS7ARMukY6RU/zKYKjZ4Jg4iwOrJ9VAfb+QbIoHbuorDf38WzP8AH1F7DLf8LZYAAAAASUVORK5CYII=" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @guest
              <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
              <x-nav-link href="/register" :active="request()->is('register')">Registration</x-nav-link>
            @endguest

            @auth
              <form method="POST" action="/logout">
                @csrf
                
                <x-form-button type="submit">Logout</x-form-button>
              </form>
            @endauth
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmQk9s5noT46QJ5eryfJu1nucOSNtFYorEYg&s" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Shabih</div>
            <div class="text-sm font-medium text-gray-400">shabih555@gmail.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

      <x-button href="/jobs/create">Create Job</x-button>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>