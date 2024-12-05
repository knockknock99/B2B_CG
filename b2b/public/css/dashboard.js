document.addEventListener("DOMContentLoaded", function () {
  // Placeholder data for charts
  const commissionData = {
    labels: ['1', '2', '3', '4', '5', '6'],
    datasets: [{
      label: 'Commission Earning',
      data: [10, 30, 20, 40, 25, 35],
      borderColor: '#0088CC',
      backgroundColor: 'rgba(0, 136, 204, 0.2)',
      fill: true,
    }]
  };

  const walletData = {
    labels: ['1', '2', '3', '4', '5', '6'],
    datasets: [{
      label: 'Wallet History',
      data: [5, 15, 10, 25, 20, 30],
      borderColor: '#666',
      backgroundColor: 'rgba(102, 102, 102, 0.2)',
      fill: true,
    }]
  };

  const historyData = {
    labels: ['1', '2', '3', '4', '5', '6'],
    datasets: [{
      label: 'History',
      data: [8, 18, 12, 22, 28, 33],
      borderColor: '#00BCD4',
      backgroundColor: 'rgba(0, 188, 212, 0.2)',
      fill: true,
    }]
  };

  const serviceData = {
    labels: ['A', 'B', 'C'],
    datasets: [{
      label: 'Service Statistics',
      data: [100, 450, 200],
      backgroundColor: '#8884d8',
    }]
  };

  // Create Commission Chart
  const commissionCtx = document.getElementById('commissionChart').getContext('2d');
  new Chart(commissionCtx, {
    type: 'line',
    data: commissionData,
  });

  // Create Wallet Chart
  const walletCtx = document.getElementById('walletChart').getContext('2d');
  new Chart(walletCtx, {
    type: 'line',
    data: walletData,
  });

  // Create History Chart
  const historyCtx = document.getElementById('historyChart').getContext('2d');
  new Chart(historyCtx, {
    type: 'line',
    data: historyData,
  });

  // Create Service Chart (Bar Chart)
  const serviceCtx = document.getElementById('serviceChart').getContext('2d');
  new Chart(serviceCtx, {
    type: 'bar',
    data: serviceData,
  });

  // Handle date input changes (for future functionality)
  const fromDateInput = document.getElementById("fromDate");
  const toDateInput = document.getElementById("toDate");

  fromDateInput.addEventListener('change', updateDateRange);
  toDateInput.addEventListener('change', updateDateRange);

  function updateDateRange() {
    const from = fromDateInput.value;
    const to = toDateInput.value;
    console.log(`From: ${from}, To: ${to}`);
    // Implement logic to filter or update charts based on selected date range.
  }
});
