<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURP Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" autocomplete="off">
        <h2>Bienvenido</h2>

        <div class="input-group">
            <div class="input-container">
                <label>NOMBRES</label> <br/>
                <input type="text" name="names" placeholder="Nombres"> 
            </div>

            <div class="input-container">
                <label>APELLIDOS PATERNOS</label> <br/>
                <input type="text" name="Paternal_name" placeholder="Apellido Paterno">
            </div>

            <div class="input-container">
                <label>APELLIDOS MATERNOS</label> <br/>
                <input type="text" name="Maternal_name" placeholder="Apellido Materno"> 
            </div>

            <div>
                <label>SEXO</label> <br/>
                <select>
                    <option value=1>Hombre</option>
                    <option value=2>Mujer</option>
                    <option value=3>No Binario</option>
                </select>
            </div>

            <div>
                <label>MES DE NACIMIENTO</label> <br/>
                <select>
                    <option value=1>Enero</option>
                    <option value=2>Febrero</option>
                    <option value=3>Marzo</option>
                    <option value=4>Abril</option>
                    <option value=5>Mayo</option>
                    <option value=6>Junio</option>
                    <option value=7>Julio</option>
                    <option value=8>Agosto</option>
                    <option value=9>Septiembre</option>
                    <option value=10>Octubre</option>
                    <option value=11>Noviembre</option>
                    <option value=12>Diciembre</option>
                </select>
            </div>

            <div>
                <label>DIA DE NACIMIENTO</label> <br/>
                <select>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                    <option value=11>11</option>
                    <option value=12>12</option>
                    <option value=13>13</option>
                    <option value=14>14</option>
                    <option value=15>15</option>
                    <option value=16>16</option>
                    <option value=17>17</option>
                    <option value=18>18</option>
                    <option value=19>19</option>
                    <option value=20>20</option>
                    <option value=21>21</option>
                    <option value=22>22</option>
                    <option value=23>23</option>
                    <option value=24>24</option>
                    <option value=25>25</option>
                    <option value=26>26</option>
                    <option value=27>27</option>
                    <option value=28>28</option>
                    <option value=29>29</option>
                    <option value=30>30</option>
                    <option value=31>31</option>
                </select>
            </div>

            <div>
                <label>AÑO DE NACIMIENTO</label> <br/>
                <select>
                    <option value=1>2000</option>
                    <option value=2>2001</option>
                    <option value=3>2002</option>
                    <option value=4>2003</option>
                    <option value=5>2004</option>
                    <option value=6>2005</option>
                    <option value=7>2006</option>
                    <option value=8>2007</option>
                    <option value=9>2008</option>
                    <option value=10>2009</option>
                    <option value=11>2010</option>
                    <option value=12>2011</option>
                    <option value=13>2012</option>
                    <option value=14>2013</option>
                    <option value=15>2014</option>
                    <option value=16>2015</option>
                </select>
            </div>

            <div>
                <label>ESTADO</label> <br/>
                <select>
                    <option value=1>Aguascalientes</option>
                    <option value=2>Baja California</option>
                    <option value=3>Baja California Sur</option>
                    <option value=4>Campeche </option>
                    <option value=5>Chiapas</option>
                    <option value=6>Chihuahua</option>
                    <option value=7>Ciudad de México</option>
                    <option value=8>Coahuila</option>
                    <option value=9>Colima</option>
                    <option value=10>Durango</option>
                    <option value=11>Estado de México</option>
                    <option value=12>Guanajuato</option>
                    <option value=13>Guerrero</option>
                    <option value=14>Hidalgo</option>
                    <option value=15>Jalisco</option>
                    <option value=16>Michoacán</option>
                    <option value=17>Morelos</option>
                    <option value=18>Nayarit</option>
                    <option value=19>Nuevo León</option>
                    <option value=20>Oaxaca</option>
                    <option value=21>Puebla</option>
                    <option value=22>Querétaro</option>
                    <option value=23>Quintana Roo</option>
                    <option value=24>San Luis Potosí</option>
                    <option value=25>Sinaloa</option>
                    <option value=26>Sonora</option>
                    <option value=27>Tabasco</option>
                    <option value=28>Tamaulipas</option>
                    <option value=29>Tlaxcala</option>
                    <option value=30>Veracruz</option>
                    <option value=31>Yucatán</option>
                    <option value=32>Zacatecas</option>

                </select>
            </div>

            
        </div>

    </form>
    
</body>
</html>