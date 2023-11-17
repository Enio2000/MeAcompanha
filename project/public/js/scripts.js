/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

let input_calories = document.querySelectorAll(".container-content tbody td input");
let column_calories = document.querySelectorAll(".container-content tbody tr td:nth-child(3)");
let trash_links = document.querySelectorAll(".container-content tbody a");

let calorias_prato = 0;

/**
 * remove um item da tabela de alimentos adicionada pelo usuario e atualiza o total de calorias
 */
trash_links.forEach((link, index) => {
    link.onclick = function (e) {
        e.preventDefault();
        let value = -1 * parseInt(column_calories[index].textContent);
        atualizar_calorias(value);

        console.log(calorias_prato);
        link.parentNode.parentNode.parentNode.removeChild(link.parentNode.parentNode);
    }
});

input_calories.forEach((input, index) => {
    input.addEventListener("change", function (e){
        column_calories[index].textContent = e.target.value;
    });
});

const somar_calorias = function (list) {
    let total = 0;
    list.forEach(item => {
        total +=  parseInt(item.textContent);

    });
    return total;
};

const atualizar_calorias = function (number) {
    calorias_prato += number;
};


calorias_prato = somar_calorias(column_calories);



/**
 * Faz uma chamada para o endpoint /api/alimentos.php
 * 
 */
const make_request = (target) => {
    const requestObject = new XMLHttpRequest();

    requestObject.open('GET', 'api/alimentos.php' + target);
    
    
    requestObject.addEventListener('readystatechange', () => {
        if(requestObject.readyState === 4 && requestObject.status === 200) {
            
            const data = JSON.parse(requestObject.responseText);
            updateSearchContent(data);
        }
    });
    
    requestObject.send();
};


/**
 * adiciona o keyup event listener no input de pesquisa
 */
const search_input = document.querySelector("#input_search");

search_input.addEventListener('keyup', e => {
    document.querySelector('.results').style.display = 'none';
    
    /**
     * faz a requisicao para a api apenas se o número de caracteres for acima de 3
     */
    if(e.target.value.length > 3) {
        make_request('?alimento='+ e.target.value);
    }
    else {
        clearResultsContentArea('.results');
    }
});


/**
 * atualiza a area de resultados da busca com os dados informados
 * 
 */
const updateSearchContent = data => {

    clearResultsContentArea('.results');
    
    const template = cloneNodeContent('#result-item');

    data.forEach(food => {
        const clone = template.cloneNode(template);
        
        
        clone.querySelector('.result-title').textContent = food.alimento;
        clone.querySelector('p span').textContent = food.calorias;
        document.querySelector('.results').appendChild(clone);
        
        
        document.querySelector('.result-item:last-child').addEventListener('click', e => {
            e.stopPropagation();
            let target = e.target;
            while(!target.classList.contains('result-item'))
            {
                target = target.parentNode;
            }
            target.dataset.resultItemId = food.id;
            
            adicionarItem(food.id);
        }, { capture: true});

    });

    changeResultsAreaVisibility('grid');
};

const clearResultsContentArea = selector => {
    const parentNode = document.querySelector(selector);
    parentNode.childNodes.forEach(child => {
        parentNode.removeChild(child);
    });
    changeResultsAreaVisibility('none');
};

const cloneNodeContent = selector => {
    const template = document.querySelector(selector).content;
    return  template.cloneNode(template);
};

const changeResultsAreaVisibility = (state) => {
    let resultsArea = document.querySelector('.results');
    resultsArea.style.display = state;
};

const adicionarItem = id => {
    const template = cloneNodeContent('#table-line');
    
    
    let request = new XMLHttpRequest();
    let target = '/api/alimentos.php?id=' + id;
    request.open('GET', target);
    
    request.addEventListener('readystatechange', () =>{
        if(request.readyState === 4 && request.status === 200){
            
            let food = JSON.parse(request.responseText);
            template.querySelector('tr').dataset.itemId = food.id;
            template.querySelector('td:nth-child(1)').textContent = food.alimento;
            template.querySelector('td:nth-child(3)').textContent = food.calorias;
            
            template.querySelector('input').dataset.baseCalories = food.calorias;
            
            template.querySelector('input').addEventListener('change', (e) =>{
                e.target.parentNode.parentNode.querySelector('td:nth-child(3)').textContent = 0.01*e.target.dataset.baseCalories*e.target.value;
                document.querySelector('section > p > span').textContent = somar_calorias(document.querySelectorAll(".container-content tbody tr td:nth-child(3)"));
            });
            // console.log(template);
            document.querySelector('tbody').appendChild(template);
            document.querySelector('section > p > span').textContent = somar_calorias(document.querySelectorAll(".container-content tbody tr td:nth-child(3)"));
        }
    });

    request.send();
};