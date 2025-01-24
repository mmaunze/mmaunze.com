import numeral from 'assets/libs/numeral/numeral.js';
import 'numeral/locales';

try {
  window.numeral = numeral;
} catch (e) {}

export { numeral };
