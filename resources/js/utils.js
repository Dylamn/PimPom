/*
 * depluralize words (only the 's' at the end of a word)
 *
 * @param word|String
 * @return String
 */
export function depluralize(word) {
    let filter = ['categories', 'equipements', 'reservations'];
    
    let temp = filter.indexOf(word) === -1 ? word : word.replace('e', 'é');

    return temp.slice(0, word.lastIndexOf('s'));
}
