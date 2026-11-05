# Datos que viajan: turismo no residente en Argentina

**Presentación web interactiva | Universidad de Buenos Aires — Facultad de Ciencias Económicas | 2026**

## Descripción del proyecto

Este sitio web presenta de manera visual e interactiva los principales resultados de un análisis de la evolución del **turismo no residente en Argentina entre enero de 2010 y agosto de 2026**. El trabajo busca responder una pregunta central: **¿el turismo internacional en Argentina logró recuperar los niveles anteriores a la pandemia de COVID-19?**

A partir de una serie histórica de datos oficiales de turismo internacional, se examinan los cambios en la cantidad de viajes, el impacto de la pandemia, la recuperación posterior, los principales países y regiones de origen, los patrones estacionales y las vías de ingreso al país. La presentación transforma los resultados del análisis en gráficos y recursos interactivos pensados para facilitar su comprensión durante una exposición académica.

## ¿Qué incluye el sitio?

La presentación está organizada en **11 diapositivas**:

1. **Portada:** presentación del tema y del período estudiado.
2. **Pregunta de investigación:** objetivo, cobertura y magnitud del conjunto de datos.
3. **Evolución anual:** gráfico de barras con los viajes registrados por año y sus valores.
4. **Impacto de la pandemia:** comparación mensual interactiva y caída entre 2019 y 2021.
5. **Recuperación posterior:** evolución de los viajes tras la pandemia y comparación con 2019.
6. **Estacionalidad:** mapa de calor con promedios mensuales por país o región de origen.
7. **Origen de los viajes:** ranking interactivo de países y regiones, y participación de países limítrofes.
8. **Recuperación por origen:** comparación de años mediante un índice con base 2019 = 100.
9. **Medios de transporte:** barras apiladas con la distribución porcentual de los ingresos aéreos, terrestres y fluviales/marítimos.
10. **Metodología y limitaciones:** fuentes, procesamiento, visualización y precauciones para interpretar los resultados.
11. **Conclusiones:** síntesis de los hallazgos, acceso al repositorio y datos de las integrantes del equipo.

## Principales hallazgos

- El turismo receptivo sufrió una caída aproximada del **96 % entre 2019 y 2021**.
- En **2023** se registró una recuperación cercana a los niveles de 2019, pero en **2024 y 2025** el total de viajes volvió a disminuir.
- Los países limítrofes concentran aproximadamente el **65 %** de los viajes del período analizado.
- La recuperación y los patrones de llegada varían según el origen de los visitantes.

**Importante:** los datos contabilizan *viajes*, no personas únicas. Una persona puede realizar más de un viaje. Además, **2026 contiene únicamente información de enero a agosto**, por lo que no debe compararse como año completo.

## Tecnologías utilizadas

- **HTML5 y CSS3:** estructura, diseño visual y adaptación de las diapositivas.
- **JavaScript:** navegación, interacciones, selectores y visualizaciones.
- **Chart.js (archivo local `chart-local.js`):** gráficos de la presentación sin depender de una conexión para cargar esa biblioteca.
- **Python, Pandas y Matplotlib:** herramientas utilizadas en el análisis exploratorio y la notebook que sirvió de base a los resultados presentados.

## Cómo ejecutar el sitio

No se requiere instalar dependencias ni iniciar un servidor para una visualización básica.

1. Descargar y descomprimir el archivo ZIP del proyecto.
2. Mantener todos los archivos en la **misma carpeta**.
3. Abrir `index.html` con un navegador actualizado (por ejemplo, Chrome, Edge o Firefox).
4. Navegar entre las diapositivas con las **flechas del teclado**, el desplazamiento o los controles disponibles en la página.
5. Interactuar con los gráficos y selectores para explorar las comparaciones.

La biblioteca de gráficos y los datos de la presentación están incluidos localmente. Las tipografías externas pueden requerir conexión a Internet; si no están disponibles, el navegador utiliza fuentes alternativas.

## Estructura de archivos

```text
├── index.html       # Contenido de las 11 diapositivas
├── styles.css       # Diseño, distribución y estilos visuales
├── app.js           # Navegación y lógica de los gráficos interactivos
├── data.js          # Datos preparados para las visualizaciones
├── chart-local.js   # Biblioteca de gráficos incluida en el proyecto
└── README.md        # Documentación del sitio
```

## Fuente de datos y alcance

La presentación se basa en una serie histórica de **turismo internacional no residente** con información de **INDEC y organismos nacionales de turismo**, procesada en la notebook del trabajo grupal. El análisis se centra en la evolución y distribución de los viajes; no permite establecer por sí solo relaciones causales con variables económicas ni identificar turistas únicos.

Los valores y gráficos del sitio representan los resultados preparados para la exposición. Para consultar el trabajo y su código de análisis, visitar el [repositorio del proyecto en GitHub](https://github.com/SariChiba/Analisis_Turismo_No_Residente).

## Integrantes

| Nombre y apellido | Número de registro | Usuario de GitHub |
|---|---|---|
| Altamirano Ileana | 922518 | `ileanaaltamirano` |
| Chiba Sari | 922474 | `sarichiba` |
| Rodríguez Noelia | 922237 | `noeliardz1996` |
| Vallejos Erika | 922313 | `vallejoserika713-cmyk` |

**Trabajo grupal — Laboratorio de Métodos Cuantitativos, Facultad de Ciencias Económicas, Universidad de Buenos Aires.**
